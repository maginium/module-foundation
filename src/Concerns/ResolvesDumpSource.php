<?php

declare(strict_types=1);

namespace Maginium\Foundation\Concerns;

use Maginium\Framework\Support\Facades\Config;
use Throwable;

trait ResolvesDumpSource
{
    /**
     * Files that require special trace handling and their levels.
     * This array maps specific files to a level adjustment for the trace.
     *
     * @var array<string, int>
     */
    protected static array $adjustableTraces = [
        // Specific file names with their respective trace adjustment level
        'symfony/var-dumper/Resources/functions/dump.php' => 1,
        'Illuminate/Collections/Traits/EnumeratesValues.php' => 4,
    ];

    /**
     * The source resolver function.
     *
     * @var (callable(): (array{0: string, 1: string, 2: int|null}|null))|null|false
     */
    protected static mixed $dumpSourceResolver;

    /**
     * All of the href formats for common editors.
     * These are the supported URLs to open files directly in specific IDEs/editors.
     *
     * @var array<string, string>
     */
    protected array $editorHrefs = [
        'vscode' => 'vscode://file/{file}:{line}', // Visual Studio Code
        'vscodium' => 'vscodium://file/{file}:{line}', // VSCodium editor
        'xdebug' => 'xdebug://{file}@{line}', // Xdebug with file and line
        'idea' => 'idea://open?file={file}&line={line}', // IntelliJ IDEA
        'netbeans' => 'netbeans://open/?f={file}:{line}', // NetBeans IDE
        'emacs' => 'emacs://open?url=file://{file}&line={line}', // Emacs editor
        'phpstorm' => 'phpstorm://open?file={file}&line={line}', // PhpStorm IDE
        'macvim' => 'mvim://open/?url=file://{file}&line={line}', // MacVim editor
        'vscode-remote' => 'vscode://vscode-remote/{file}:{line}', // Remote VS Code
        'textmate' => 'txmt://open?url=file://{file}&line={line}', // TextMate editor
        'atom' => 'atom://core/open/file?filename={file}&line={line}', // Atom editor
        'nova' => 'nova://core/open/file?filename={file}&line={line}', // Nova editor
        'sublime' => 'subl://open?url=file://{file}&line={line}', // Sublime Text editor
        'vscode-insiders' => 'vscode-insiders://file/{file}:{line}', // VS Code Insiders
        'vscode-insiders-remote' => 'vscode-insiders://vscode-remote/{file}:{line}', // Remote VS Code Insiders
    ];

    /**
     * Set the resolver that resolves the source of the dump call.
     * This method allows setting a callable to resolve the source of the dump (i.e., the file and line).
     *
     * @param  (callable(): (array{0: string, 1: string, 2: int|null}|null))|null  $callable
     *
     * @return void
     */
    public static function resolveDumpSourceUsing($callable): void
    {
        // Store the callable to resolve the dump source dynamically
        static::$dumpSourceResolver = $callable;
    }

    /**
     * Disable the inclusion of the source file and line in dumps.
     * This method can be used to stop showing the file and line number in the dump.
     *
     * @return void
     */
    public static function dontIncludeSource(): void
    {
        // Set the resolver to false, effectively disabling source resolution
        static::$dumpSourceResolver = false;
    }

    /**
     * Resolve the source of the dump call.
     * This method will return the file, relative file, and line number for where the dump was called from.
     *
     * @return array{0: string, 1: string, 2: int|null}|null
     */
    public function resolveDumpSource(): mixed
    {
        // If the source resolver is explicitly disabled, return nothing
        if (static::$dumpSourceResolver === false) {
            return null;
        }

        // If a source resolver is set, invoke it to resolve the source
        if (static::$dumpSourceResolver) {
            return call_user_func(static::$dumpSourceResolver);
        }

        // Get the backtrace of the function call (excluding arguments)
        $trace = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 20);

        // Initialize variable to hold the resolved trace key
        $sourceKey = null;

        // Iterate over the backtrace to find the source of the dump call
        foreach ($trace as $traceKey => $traceFile) {
            // Skip traces without a file attribute
            if (! isset($traceFile['file'])) {
                continue;
            }

            // Check the trace files against the adjustable traces and adjust the trace level if needed
            foreach (self::$adjustableTraces as $name => $key) {
                // Check if the file ends with the given trace name and apply the level adjustment
                if (str_ends_with($traceFile['file'], str_replace('/', DIRECTORY_SEPARATOR, $name))) {
                    $sourceKey = $traceKey + $key;

                    break;
                }
            }

            // If a source key was found, stop iterating
            if ($sourceKey !== null) {
                break;
            }
        }

        // If no source key was found, return nothing
        if ($sourceKey === null) {
            return null;
        }

        // Get the file and line from the resolved trace
        $file = $trace[$sourceKey]['file'] ?? null;
        $line = $trace[$sourceKey]['line'] ?? null;

        // If the file or line is missing, return nothing
        if ($file === null || $line === null) {
            return null;
        }

        // Set the relative file path
        $relativeFile = $file;

        // If the file path starts with the base path, get the relative file path
        if (str_starts_with($file, $this->basePath)) {
            $relativeFile = mb_substr($file, mb_strlen($this->basePath) + 1);
        }

        // Return the file, relative file, and line number
        return [$file, $relativeFile, $line];
    }

    /**
     * Resolve the source href, if possible.
     * This method generates a URL to open the file in a supported editor at the given line.
     *
     * @param  string  $file
     * @param  int|null  $line
     *
     * @return string|null
     */
    protected function resolveSourceHref($file, $line): ?string
    {
        try {
            // Get the configured editor from the app configuration
            $editor = Config::getString('app.editor');
        } catch (Throwable) {
            // Ignore any exceptions while fetching the editor config
        }

        // If no editor is configured, return nothing
        if (! isset($editor)) {
            return null;
        }

        // Get the href format for the editor (fall back to default if not set)
        $href = is_array($editor) && isset($editor['href'])
            ? $editor['href']
            : ($this->editorHrefs[$editor['name'] ?? $editor] ?? sprintf('%s://open?file={file}&line={line}', $editor['name'] ?? $editor));

        // If a base path is configured, adjust the file path
        if ($basePath = $editor['base_path'] ?? false) {
            $file = str_replace($this->basePath, $basePath, $file);
        }

        // Replace the placeholders in the href with the file and line values
        return str_replace(['{file}', '{line}'], [$file, $line], $href);
    }
}
