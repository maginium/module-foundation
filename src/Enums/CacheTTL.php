<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum for cache time-to-live (TTL) values in seconds.
 *
 * This enum defines various time-to-live values for cache expiration, expressed in seconds.
 *
 * @method static self SECOND() Represents a time-to-live value of one second (1).
 * @method static self MINUTE() Represents a time-to-live value of one minute (60).
 * @method static self HOUR() Represents a time-to-live value of one hour (3600).
 * @method static self DAY() Represents a time-to-live value of one day (86400).
 * @method static self WEEK() Represents a time-to-live value of one week (604800).
 * @method static self MONTH() Represents a time-to-live value of one month (2592000).
 * @method static self YEAR() Represents a time-to-live value of one year (31536000).
 * @method static int second() Get the value for one second.
 * @method static int seconds(int $seconds) Get the value for the specified number of seconds.
 * @method static int minute() Get the value for one minute.
 * @method static int minutes(int $minutes) Get the value for the specified number of minutes.
 * @method static int hour() Get the value for one hour.
 * @method static int hours(int $hours) Get the value for the specified number of hours.
 * @method static int day() Get the value for one day.
 * @method static int days(int $days) Get the value for the specified number of days.
 * @method static int week() Get the value for one week (7 days).
 * @method static int weeks(int $weeks) Get the value for the specified number of weeks.
 * @method static int month() Get the value for one month (30 days).
 * @method static int months(int $months) Get the value for the specified number of months.
 * @method static int year() Get the value for one year (365 days).
 * @method static int years(int $years) Get the value for the specified number of years.
 */
class CacheTTL extends Enum
{
    /**
     * Represents a time-to-live value of one second.
     */
    #[Label('One Second')]
    #[Description('Cache entry will expire after one second.')]
    public const SECOND = 1;

    /**
     * Represents a time-to-live value of one minute (60 seconds).
     */
    #[Label('One Minute')]
    #[Description('Cache entry will expire after one minute.')]
    public const MINUTE = 60;

    /**
     * Represents a time-to-live value of one hour (3600 seconds).
     */
    #[Label('One Hour')]
    #[Description('Cache entry will expire after one hour.')]
    public const HOUR = 3600;

    /**
     * Represents a time-to-live value of one day (86400 seconds).
     */
    #[Label('One Day')]
    #[Description('Cache entry will expire after one day.')]
    public const DAY = 86400;

    /**
     * Represents a time-to-live value of one week (604800 seconds, 7 days).
     */
    #[Label('One Week')]
    #[Description('Cache entry will expire after one week.')]
    public const WEEK = 604800;

    /**
     * Represents a time-to-live value of one month (2592000 seconds, 30 days).
     */
    #[Label('One Month')]
    #[Description('Cache entry will expire after one month.')]
    public const MONTH = 2592000;

    /**
     * Represents a time-to-live value of one year (31536000 seconds, 365 days).
     */
    #[Label('One Year')]
    #[Description('Cache entry will expire after one year.')]
    public const YEAR = 31536000;

    /**
     * Get the value for one second.
     */
    public static function second(): int
    {
        return self::SECOND;
    }

    /**
     * Get the value for the specified number of seconds.
     *
     * @param  int  $seconds  The number of seconds.
     */
    public static function seconds(int $seconds): int
    {
        return $seconds * self::SECOND;
    }

    /**
     * Get the value for one minute.
     */
    public static function minute(): int
    {
        return self::MINUTE;
    }

    /**
     * Get the value for the specified number of minutes.
     *
     * @param  int  $minutes  The number of minutes.
     */
    public static function minutes(int $minutes): int
    {
        return $minutes * self::MINUTE;
    }

    /**
     * Get the value for one hour.
     */
    public static function hour(): int
    {
        return self::HOUR;
    }

    /**
     * Get the value for the specified number of hours.
     *
     * @param  int  $hours  The number of hours.
     */
    public static function hours(int $hours): int
    {
        return $hours * self::HOUR;
    }

    /**
     * Get the value for one day.
     */
    public static function day(): int
    {
        return self::DAY;
    }

    /**
     * Get the value for the specified number of days.
     *
     * @param  int  $days  The number of days.
     */
    public static function days(int $days): int
    {
        return $days * self::DAY;
    }

    /**
     * Get the value for one week (7 days).
     */
    public static function week(): int
    {
        return self::WEEK;
    }

    /**
     * Get the value for the specified number of weeks.
     *
     * @param  int  $weeks  The number of weeks.
     */
    public static function weeks(int $weeks): int
    {
        return $weeks * self::WEEK;
    }

    /**
     * Get the value for one month (30 days).
     */
    public static function month(): int
    {
        return self::MONTH;
    }

    /**
     * Get the value for the specified number of months.
     *
     * @param  int  $months  The number of months.
     */
    public static function months(int $months): int
    {
        return $months * self::MONTH;
    }

    /**
     * Get the value for one year (365 days).
     */
    public static function year(): int
    {
        return self::YEAR;
    }

    /**
     * Get the value for the specified number of years.
     *
     * @param  int  $years  The number of years.
     */
    public static function years(int $years): int
    {
        return $years * self::YEAR;
    }
}
