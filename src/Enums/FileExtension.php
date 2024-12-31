<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Defines various file extensions as enumerations.
 *
 * @method static self TXT() Represents a plain text file.
 * @method static self DOC() Represents a Microsoft Word document.
 * @method static self DOCX() Represents an XML-based Word document.
 * @method static self PDF() Represents a Portable Document Format file.
 * @method static self JPG() Represents a JPEG image file.
 * @method static self JPEG() Represents a JPEG image file.
 * @method static self PNG() Represents a Portable Network Graphics image file.
 * @method static self GIF() Represents a Graphics Interchange Format image file.
 * @method static self MP4() Represents an MPEG-4 video file.
 * @method static self MOV() Represents an Apple QuickTime movie file.
 * @method static self AVI() Represents an Audio Video Interleave file.
 * @method static self MP3() Represents an MPEG Layer 3 audio file.
 * @method static self WAV() Represents a Waveform Audio File Format.
 * @method static self ZIP() Represents a compressed archive file.
 * @method static self TAR() Represents a Unix tape archive file.
 * @method static self GZ() Represents a Gzip compressed archive file.
 * @method static self PHP() Represents a PHP file.
 * @method static self TTF() Represents a TrueType font file.
 * @method static self WOFF() Represents a Web Open Font Format file.
 * @method static self WOFF2() Represents a Web Open Font Format file (version 2).
 * @method static self LOG() Represents a log file.
 * @method static self XML() Represents a XML file.
 * @method static self JSON() Represents a JSON file.
 * @method static self CSV() Represents a CSV file.
 * @method static self WEBP() Represents a WebP image file with the .webp extension.
 * @method static self FLF() Represents a Figlet Font file with the .flf extension.
 */
class FileExtension extends Enum
{
    /**
     * Text file extension.
     */
    #[Label('Text File')]
    #[Description('Represents a plain text file with the .txt extension.')]
    public const TXT = 'txt';

    /**
     * SVG file extension.
     */
    #[Label('SVG File')]
    #[Description('Represents a Scalable Vector Graphics file with the .svg extension.')]
    public const SVG = 'svg';

    /**
     * Word document file extension.
     */
    #[Label('Word Document (Old)')]
    #[Description('Represents a Microsoft Word document with the .doc extension.')]
    public const DOC = 'doc';

    /**
     * Word document file extension (newer version).
     */
    #[Label('Word Document (New)')]
    #[Description('Represents an XML-based Microsoft Word document with the .docx extension.')]
    public const DOCX = 'docx';

    /**
     * PDF file extension.
     */
    #[Label('PDF File')]
    #[Description('Represents a Portable Document Format file with the .pdf extension.')]
    public const PDF = 'pdf';

    /**
     * JPEG image file extension.
     */
    #[Label('JPEG Image')]
    #[Description('Represents a JPEG image file with the .jpg extension.')]
    public const JPG = 'jpg';

    /**
     * JPEG image file extension (alternative).
     */
    #[Label('JPEG Image (Alternative)')]
    #[Description('Represents a JPEG image file with the .jpeg extension.')]
    public const JPEG = 'jpeg';

    /**
     * PNG image file extension.
     */
    #[Label('PNG Image')]
    #[Description('Represents a Portable Network Graphics image file with the .png extension.')]
    public const PNG = 'png';

    /**
     * GIF image file extension.
     */
    #[Label('GIF Image')]
    #[Description('Represents a Graphics Interchange Format image file with the .gif extension.')]
    public const GIF = 'gif';

    /**
     * MP4 video file extension.
     */
    #[Label('MP4 Video')]
    #[Description('Represents an MPEG-4 video file with the .mp4 extension.')]
    public const MP4 = 'mp4';

    /**
     * MOV video file extension.
     */
    #[Label('MOV Video')]
    #[Description('Represents an Apple QuickTime movie file with the .mov extension.')]
    public const MOV = 'mov';

    /**
     * AVI video file extension.
     */
    #[Label('AVI Video')]
    #[Description('Represents an Audio Video Interleave file with the .avi extension.')]
    public const AVI = 'avi';

    /**
     * MP3 audio file extension.
     */
    #[Label('MP3 Audio')]
    #[Description('Represents an MPEG Layer 3 audio file with the .mp3 extension.')]
    public const MP3 = 'mp3';

    /**
     * WAV audio file extension.
     */
    #[Label('WAV Audio')]
    #[Description('Represents a Waveform Audio File Format with the .wav extension.')]
    public const WAV = 'wav';

    /**
     * ZIP compressed file extension.
     */
    #[Label('ZIP Archive')]
    #[Description('Represents a compressed archive file with the .zip extension.')]
    public const ZIP = 'zip';

    /**
     * TAR compressed file extension.
     */
    #[Label('TAR Archive')]
    #[Description('Represents a Unix tape archive file with the .tar extension.')]
    public const TAR = 'tar';

    /**
     * GZ compressed file extension.
     */
    #[Label('GZ Archive')]
    #[Description('Represents a Gzip compressed archive file with the .gz extension.')]
    public const GZ = 'gz';

    /**
     * PHP file extension.
     */
    #[Label('PHP File')]
    #[Description('Represents a PHP script file with the .php extension.')]
    public const PHP = 'php';

    /**
     * TrueType font file extension.
     */
    #[Label('TrueType Font')]
    #[Description('Represents a TrueType font file with the .ttf extension.')]
    public const TTF = 'ttf';

    /**
     * Web Open Font Format file extension.
     */
    #[Label('WOFF Font')]
    #[Description('Represents a Web Open Font Format file with the .woff extension.')]
    public const WOFF = 'woff';

    /**
     * Web Open Font Format file extension (version 2).
     */
    #[Label('WOFF2 Font')]
    #[Description('Represents a Web Open Font Format file (version 2) with the .woff2 extension.')]
    public const WOFF2 = 'woff2';

    /**
     * Log file extension.
     */
    #[Label('Log File')]
    #[Description('Represents a log file with the .log extension.')]
    public const LOG = 'log';

    /**
     * XML file extension.
     */
    #[Label('XML File')]
    #[Description('Represents an XML file with the .xml extension.')]
    public const XML = 'xml';

    /**
     * JSON file extension.
     */
    #[Label('JSON File')]
    #[Description('Represents a JSON file with the .json extension.')]
    public const JSON = 'json';

    /**
     * CSV file extension.
     */
    #[Label('CSV File')]
    #[Description('Represents a CSV file with the .csv extension.')]
    public const CSV = 'csv';

    /**
     * WebP image file extension.
     */
    #[Label('WebP Image')]
    #[Description('Represents a WebP image file with the .webp extension.')]
    public const WEBP = 'webp';

    /**
     * Figlet Font file extension.
     */
    #[Label('Figlet Font File')]
    #[Description('Represents a Figlet font file with the .flf extension, commonly used for ASCII art.')]
    public const FLF = 'flf';
}
