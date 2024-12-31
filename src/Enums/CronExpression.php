<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing various cron expressions for scheduling tasks.
 * Each value is a cron expression string that defines the scheduling pattern.
 *
 * @method static EVERY_SECOND() Executes every second.
 * @method static EVERY_5_SECONDS() Executes every 5 seconds.
 * @method static EVERY_10_SECONDS() Executes every 10 seconds.
 * @method static EVERY_30_SECONDS() Executes every 30 seconds.
 * @method static EVERY_MINUTE() Executes every minute.
 * @method static EVERY_5_MINUTES() Executes every 5 minutes.
 * @method static EVERY_10_MINUTES() Executes every 10 minutes.
 * @method static EVERY_30_MINUTES() Executes every 30 minutes.
 * @method static EVERY_HOUR() Executes every hour.
 * @method static EVERY_2_HOURS() Executes every 2 hours.
 * @method static EVERY_3_HOURS() Executes every 3 hours.
 * @method static EVERY_4_HOURS() Executes every 4 hours.
 * @method static EVERY_5_HOURS() Executes every 5 hours.
 * @method static EVERY_6_HOURS() Executes every 6 hours.
 * @method static EVERY_7_HOURS() Executes every 7 hours.
 * @method static EVERY_8_HOURS() Executes every 8 hours.
 * @method static EVERY_9_HOURS() Executes every 9 hours.
 * @method static EVERY_10_HOURS() Executes every 10 hours.
 * @method static EVERY_11_HOURS() Executes every 11 hours.
 * @method static EVERY_12_HOURS() Executes every 12 hours.
 * @method static EVERY_DAY_AT_1AM() Executes every day at 1 AM.
 * @method static EVERY_DAY_AT_2AM() Executes every day at 2 AM.
 * @method static EVERY_DAY_AT_3AM() Executes every day at 3 AM.
 * @method static EVERY_DAY_AT_4AM() Executes every day at 4 AM.
 * @method static EVERY_DAY_AT_5AM() Executes every day at 5 AM.
 * @method static EVERY_DAY_AT_6AM() Executes every day at 6 AM.
 * @method static EVERY_DAY_AT_7AM() Executes every day at 7 AM.
 * @method static EVERY_DAY_AT_8AM() Executes every day at 8 AM.
 * @method static EVERY_DAY_AT_9AM() Executes every day at 9 AM.
 * @method static EVERY_DAY_AT_10AM() Executes every day at 10 AM.
 * @method static EVERY_DAY_AT_11AM() Executes every day at 11 AM.
 * @method static EVERY_DAY_AT_NOON() Executes every day at noon (12 PM).
 * @method static EVERY_DAY_AT_1PM() Executes every day at 1 PM.
 * @method static EVERY_DAY_AT_2PM() Executes every day at 2 PM.
 * @method static EVERY_DAY_AT_3PM() Executes every day at 3 PM.
 * @method static EVERY_DAY_AT_4PM() Executes every day at 4 PM.
 * @method static EVERY_DAY_AT_5PM() Executes every day at 5 PM.
 * @method static EVERY_DAY_AT_6PM() Executes every day at 6 PM.
 * @method static EVERY_DAY_AT_7PM() Executes every day at 7 PM.
 * @method static EVERY_DAY_AT_8PM() Executes every day at 8 PM.
 * @method static EVERY_DAY_AT_9PM() Executes every day at 9 PM.
 * @method static EVERY_DAY_AT_10PM() Executes every day at 10 PM.
 * @method static EVERY_DAY_AT_11PM() Executes every day at 11 PM.
 * @method static EVERY_DAY_AT_MIDNIGHT() Executes every day at midnight (12 AM).
 * @method static EVERY_WEEK() Executes every week on Sunday at midnight.
 * @method static EVERY_WEEKDAY() Executes every weekday (Monday to Friday) at midnight.
 * @method static EVERY_WEEKEND() Executes every weekend (Saturday and Sunday) at midnight.
 * @method static EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT() Executes on the 1st day of every month at midnight.
 * @method static EVERY_1ST_DAY_OF_MONTH_AT_NOON() Executes on the 1st day of every month at noon.
 * @method static EVERY_2ND_HOUR() Executes every 2 hours.
 * @method static EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM() Executes every 2nd hour from 1 AM to 11 PM.
 * @method static EVERY_2ND_MONTH() Executes on the 1st day of every 2nd month at midnight.
 * @method static EVERY_QUARTER() Executes on the 1st day of every quarter (3 months) at midnight.
 * @method static EVERY_6_MONTHS() Executes on the 1st day of every 6 months at midnight.
 * @method static EVERY_YEAR() Executes on the 1st day of January at midnight.
 * @method static EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM() Executes every 30 minutes between 9 AM and 5 PM.
 * @method static EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM() Executes every 30 minutes between 9 AM and 6 PM.
 * @method static EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM() Executes every 30 minutes between 10 AM and 7 PM.
 * @method static MONDAY_TO_FRIDAY_AT_1AM() Executes Monday to Friday at 1 AM.
 * @method static MONDAY_TO_FRIDAY_AT_2AM() Executes Monday to Friday at 2 AM.
 * @method static MONDAY_TO_FRIDAY_AT_3AM() Executes Monday to Friday at 3 AM.
 * @method static MONDAY_TO_FRIDAY_AT_4AM() Executes Monday to Friday at 4 AM.
 * @method static MONDAY_TO_FRIDAY_AT_5AM() Executes Monday to Friday at 5 AM.
 * @method static MONDAY_TO_FRIDAY_AT_6AM() Executes Monday to Friday at 6 AM.
 * @method static MONDAY_TO_FRIDAY_AT_7AM() Executes Monday to Friday at 7 AM.
 * @method static MONDAY_TO_FRIDAY_AT_8AM() Executes Monday to Friday at 8 AM.
 * @method static MONDAY_TO_FRIDAY_AT_9AM() Executes Monday to Friday at 9 AM.
 * @method static MONDAY_TO_FRIDAY_AT_09_30AM() Executes Monday to Friday at 9:30 AM.
 * @method static MONDAY_TO_FRIDAY_AT_10AM() Executes Monday to Friday at 10 AM.
 * @method static MONDAY_TO_FRIDAY_AT_11AM() Executes Monday to Friday at 11 AM.
 * @method static MONDAY_TO_FRIDAY_AT_11_30AM() Executes Monday to Friday at 11:30 AM.
 * @method static MONDAY_TO_FRIDAY_AT_12PM() Executes Monday to Friday at 12 PM.
 * @method static MONDAY_TO_FRIDAY_AT_1PM() Executes Monday to Friday at 1 PM.
 * @method static MONDAY_TO_FRIDAY_AT_2PM() Executes Monday to Friday at 2 PM.
 * @method static MONDAY_TO_FRIDAY_AT_3PM() Executes Monday to Friday at 3 PM.
 * @method static MONDAY_TO_FRIDAY_AT_4PM() Executes Monday to Friday at 4 PM.
 * @method static MONDAY_TO_FRIDAY_AT_5PM() Executes Monday to Friday at 5 PM.
 * @method static MONDAY_TO_FRIDAY_AT_6PM() Executes Monday to Friday at 6 PM.
 * @method static MONDAY_TO_FRIDAY_AT_7PM() Executes Monday to Friday at 7 PM.
 * @method static MONDAY_TO_FRIDAY_AT_8PM() Executes Monday to Friday at 8 PM.
 * @method static MONDAY_TO_FRIDAY_AT_9PM() Executes Monday to Friday at 9 PM.
 * @method static MONDAY_TO_FRIDAY_AT_10PM() Executes Monday to Friday at 10 PM.
 * @method static MONDAY_TO_FRIDAY_AT_11PM() Executes Monday to Friday at 11 PM.
 */
class CronExpression extends Enum
{
    /**
     * Executes every second.
     */
    #[Label('Every Second')]
    #[Description('Cron expression for executing a task every second.')]
    public const EVERY_SECOND = '* * * * *';

    /**
     * Executes every 5 seconds.
     */
    #[Label('Every 5 Seconds')]
    #[Description('Cron expression for executing a task every 5 seconds.')]
    public const EVERY_5_SECONDS = '*/5 * * * *';

    /**
     * Executes every 10 seconds.
     */
    #[Label('Every 10 Seconds')]
    #[Description('Cron expression for executing a task every 10 seconds.')]
    public const EVERY_10_SECONDS = '*/10 * * * *';

    /**
     * Executes every 30 seconds.
     */
    #[Label('Every 30 Seconds')]
    #[Description('Cron expression for executing a task every 30 seconds.')]
    public const EVERY_30_SECONDS = '*/30 * * * *';

    /**
     * Executes every minute.
     */
    #[Label('Every Minute')]
    #[Description('Cron expression for executing a task every minute.')]
    public const EVERY_MINUTE = '*/1 * * *';

    /**
     * Executes every 5 minutes.
     */
    #[Label('Every 5 Minutes')]
    #[Description('Cron expression for executing a task every 5 minutes.')]
    public const EVERY_5_MINUTES = '0 */5 * * *';

    /**
     * Executes every 10 minutes.
     */
    #[Label('Every 10 Minutes')]
    #[Description('Cron expression for executing a task every 10 minutes.')]
    public const EVERY_10_MINUTES = '0 */10 * * *';

    /**
     * Executes every 30 minutes.
     */
    #[Label('Every 30 Minutes')]
    #[Description('Cron expression for executing a task every 30 minutes.')]
    public const EVERY_30_MINUTES = '0 */30 * * *';

    /**
     * Executes every hour.
     */
    #[Label('Every Hour')]
    #[Description('Cron expression for executing a task every hour.')]
    public const EVERY_HOUR = '0 0-23/1 * *';

    /**
     * Executes every 2 hours.
     */
    #[Label('Every 2 Hours')]
    #[Description('Cron expression for executing a task every 2 hours.')]
    public const EVERY_2_HOURS = '0 0-23/2 * *';

    /**
     * Executes every 3 hours.
     */
    #[Label('Every 3 Hours')]
    #[Description('Cron expression for executing a task every 3 hours.')]
    public const EVERY_3_HOURS = '0 0-23/3 * *';

    /**
     * Executes every 4 hours.
     */
    #[Label('Every 4 Hours')]
    #[Description('Cron expression for executing a task every 4 hours.')]
    public const EVERY_4_HOURS = '0 0-23/4 * *';

    /**
     * Executes every 5 hours.
     */
    #[Label('Every 5 Hours')]
    #[Description('Cron expression for executing a task every 5 hours.')]
    public const EVERY_5_HOURS = '0 0-23/5 * *';

    /**
     * Executes every 6 hours.
     */
    #[Label('Every 6 Hours')]
    #[Description('Cron expression for executing a task every 6 hours.')]
    public const EVERY_6_HOURS = '0 0-23/6 * *';

    /**
     * Executes every 7 hours.
     */
    #[Label('Every 7 Hours')]
    #[Description('Cron expression for executing a task every 7 hours.')]
    public const EVERY_7_HOURS = '0 0-23/7 * *';

    /**
     * Executes every 8 hours.
     */
    #[Label('Every 8 Hours')]
    #[Description('Cron expression for executing a task every 8 hours.')]
    public const EVERY_8_HOURS = '0 0-23/8 * *';

    /**
     * Executes every 9 hours.
     */
    #[Label('Every 9 Hours')]
    #[Description('Cron expression for executing a task every 9 hours.')]
    public const EVERY_9_HOURS = '0 0-23/9 * *';

    /**
     * Executes every 10 hours.
     */
    #[Label('Every 10 Hours')]
    #[Description('Cron expression for executing a task every 10 hours.')]
    public const EVERY_10_HOURS = '0 0-23/10 * *';

    /**
     * Executes every 11 hours.
     */
    #[Label('Every 11 Hours')]
    #[Description('Cron expression for executing a task every 11 hours.')]
    public const EVERY_11_HOURS = '0 0-23/11 * *';

    /**
     * Executes every 12 hours.
     */
    #[Label('Every 12 Hours')]
    #[Description('Cron expression for executing a task every 12 hours.')]
    public const EVERY_12_HOURS = '0 0-23/12 * *';

    /**
     * Executes every day at 1 AM.
     */
    #[Label('Every Day at 1 AM')]
    #[Description('Cron expression for executing a task every day at 1 AM.')]
    public const EVERY_DAY_AT_1AM = '0 01 * *';

    /**
     * Executes every day at 2 AM.
     */
    #[Label('Every Day at 2 AM')]
    #[Description('Cron expression for executing a task every day at 2 AM.')]
    public const EVERY_DAY_AT_2AM = '0 02 * *';

    /**
     * Executes every day at 3 AM.
     */
    #[Label('Every Day at 3 AM')]
    #[Description('Cron expression for executing a task every day at 3 AM.')]
    public const EVERY_DAY_AT_3AM = '0 03 * *';

    /**
     * Executes every day at 4 AM.
     */
    #[Label('Every Day at 4 AM')]
    #[Description('Cron expression for executing a task every day at 4 AM.')]
    public const EVERY_DAY_AT_4AM = '0 04 * *';

    /**
     * Executes every day at 5 AM.
     */
    #[Label('Every Day at 5 AM')]
    #[Description('Cron expression for executing a task every day at 5 AM.')]
    public const EVERY_DAY_AT_5AM = '0 05 * *';

    /**
     * Executes every day at 6 AM.
     */
    #[Label('Every Day at 6 AM')]
    #[Description('Cron expression for executing a task every day at 6 AM.')]
    public const EVERY_DAY_AT_6AM = '0 06 * *';

    /**
     * Executes every day at 7 AM.
     */
    #[Label('Every Day at 7 AM')]
    #[Description('Cron expression for executing a task every day at 7 AM.')]
    public const EVERY_DAY_AT_7AM = '0 07 * *';

    /**
     * Executes every day at 8 AM.
     */
    #[Label('Every Day at 8 AM')]
    #[Description('Cron expression for executing a task every day at 8 AM.')]
    public const EVERY_DAY_AT_8AM = '0 08 * *';

    /**
     * Executes every day at 9 AM.
     */
    #[Label('Every Day at 9 AM')]
    #[Description('Cron expression for executing a task every day at 9 AM.')]
    public const EVERY_DAY_AT_9AM = '0 09 * *';

    /**
     * Executes every day at 10 AM.
     */
    #[Label('Every Day at 10 AM')]
    #[Description('Cron expression for executing a task every day at 10 AM.')]
    public const EVERY_DAY_AT_10AM = '0 10 * *';

    /**
     * Executes every day at 11 AM.
     */
    #[Label('Every Day at 11 AM')]
    #[Description('Cron expression for executing a task every day at 11 AM.')]
    public const EVERY_DAY_AT_11AM = '0 11 * *';

    /**
     * Executes every day at noon (12 PM).
     */
    #[Label('Every Day at Noon')]
    #[Description('Cron expression for executing a task every day at noon (12 PM).')]
    public const EVERY_DAY_AT_NOON = '0 12 * *';

    /**
     * Executes every day at 1 PM.
     */
    #[Label('Every Day at 1 PM')]
    #[Description('Cron expression for executing a task every day at 1 PM.')]
    public const EVERY_DAY_AT_1PM = '0 13 * *';

    /**
     * Executes every day at 2 PM.
     */
    #[Label('Every Day at 2 PM')]
    #[Description('Cron expression for executing a task every day at 2 PM.')]
    public const EVERY_DAY_AT_2PM = '0 14 * *';

    /**
     * Executes every day at 3 PM.
     */
    #[Label('Every Day at 3 PM')]
    #[Description('Cron expression for executing a task every day at 3 PM.')]
    public const EVERY_DAY_AT_3PM = '0 15 * *';

    /**
     * Executes every day at 4 PM.
     */
    #[Label('Every Day at 4 PM')]
    #[Description('Cron expression for executing a task every day at 4 PM.')]
    public const EVERY_DAY_AT_4PM = '0 16 * *';

    /**
     * Executes every day at 5 PM.
     */
    #[Label('Every Day at 5 PM')]
    #[Description('Cron expression for executing a task every day at 5 PM.')]
    public const EVERY_DAY_AT_5PM = '0 17 * *';

    /**
     * Executes every day at 6 PM.
     */
    #[Label('Every Day at 6 PM')]
    #[Description('Cron expression for executing a task every day at 6 PM.')]
    public const EVERY_DAY_AT_6PM = '0 18 * *';

    /**
     * Executes every day at 7 PM.
     */
    #[Label('Every Day at 7 PM')]
    #[Description('Cron expression for executing a task every day at 7 PM.')]
    public const EVERY_DAY_AT_7PM = '0 19 * *';

    /**
     * Executes every day at 8 PM.
     */
    #[Label('Every Day at 8 PM')]
    #[Description('Cron expression for executing a task every day at 8 PM.')]
    public const EVERY_DAY_AT_8PM = '0 20 * *';

    /**
     * Executes every day at 9 PM.
     */
    #[Label('Every Day at 9 PM')]
    #[Description('Cron expression for executing a task every day at 9 PM.')]
    public const EVERY_DAY_AT_9PM = '0 21 * *';

    /**
     * Executes every day at 10 PM.
     */
    #[Label('Every Day at 10 PM')]
    #[Description('Cron expression for executing a task every day at 10 PM.')]
    public const EVERY_DAY_AT_10PM = '0 22 * *';

    /**
     * Executes every day at 11 PM.
     */
    #[Label('Every Day at 11 PM')]
    #[Description('Cron expression for executing a task every day at 11 PM.')]
    public const EVERY_DAY_AT_11PM = '0 23 * *';

    /**
     * Executes every day at midnight (12 AM).
     */
    #[Label('Every Day at Midnight')]
    #[Description('Cron expression for executing a task every day at midnight (12 AM).')]
    public const EVERY_DAY_AT_MIDNIGHT = '0 0 * *';

    /**
     * Executes every week on Sunday at midnight.
     */
    #[Label('Every Week')]
    #[Description('Cron expression for executing a task every week on Sunday at midnight.')]
    public const EVERY_WEEK = '0 0 * * 0';

    /**
     * Executes every weekday (Monday to Friday) at midnight.
     */
    #[Label('Every Weekday')]
    #[Description('Cron expression for executing a task every weekday (Monday to Friday) at midnight.')]
    public const EVERY_WEEKDAY = '0 0 * * 1-5';

    /**
     * Executes every weekend (Saturday and Sunday) at midnight.
     */
    #[Label('Every Weekend')]
    #[Description('Cron expression for executing a task every weekend (Saturday and Sunday) at midnight.')]
    public const EVERY_WEEKEND = '0 0 * * 6,0';

    /**
     * Executes on the 1st day of every month at midnight.
     */
    #[Label('1st Day of Month at Midnight')]
    #[Description('Cron expression for executing a task on the 1st day of every month at midnight.')]
    public const EVERY_1ST_DAY_OF_MONTH_AT_MIDNIGHT = '0 0 1 *';

    /**
     * Executes on the 1st day of every month at noon.
     */
    #[Label('1st Day of Month at Noon')]
    #[Description('Cron expression for executing a task on the 1st day of every month at noon.')]
    public const EVERY_1ST_DAY_OF_MONTH_AT_NOON = '0 12 1 *';

    /**
     * Executes every 2 hours.
     */
    #[Label('Every 2nd Hour')]
    #[Description('Cron expression for executing a task every 2 hours.')]
    public const EVERY_2ND_HOUR = '0 */2 * *';

    /**
     * Executes every 2nd hour from 1 AM through 11 PM.
     */
    #[Label('Every 2nd Hour from 1 AM to 11 PM')]
    #[Description('Cron expression for executing a task every 2nd hour from 1 AM through 11 PM.')]
    public const EVERY_2ND_HOUR_FROM_1AM_THROUGH_11PM = '0 1-23/2 * *';

    /**
     * Executes on the 1st day of every 2nd month at midnight.
     */
    #[Label('Every 2nd Month')]
    #[Description('Cron expression for executing a task on the 1st day of every 2nd month at midnight.')]
    public const EVERY_2ND_MONTH = '0 0 1 */2';

    /**
     * Executes on the 1st day of every quarter (3 months) at midnight.
     */
    #[Label('Every Quarter')]
    #[Description('Cron expression for executing a task on the 1st day of every quarter (3 months) at midnight.')]
    public const EVERY_QUARTER = '0 0 1 */3';

    /**
     * Executes on the 1st day of every 6 months at midnight.
     */
    #[Label('Every 6 Months')]
    #[Description('Cron expression for executing a task on the 1st day of every 6 months at midnight.')]
    public const EVERY_6_MONTHS = '0 0 1 */6';

    /**
     * Executes on the 1st day of January at midnight.
     */
    #[Label('Every Year')]
    #[Description('Cron expression for executing a task on the 1st day of January at midnight.')]
    public const EVERY_YEAR = '0 0 1 1';

    /**
     * Executes every 30 minutes between 9 AM and 5 PM.
     */
    #[Label('Every 30 Minutes Between 9 AM and 5 PM')]
    #[Description('Cron expression for executing a task every 30 minutes between 9 AM and 5 PM.')]
    public const EVERY_30_MINUTES_BETWEEN_9AM_AND_5PM = '0 */30 9-17 * *';

    /**
     * Executes every 30 minutes between 9 AM and 6 PM.
     */
    #[Label('Every 30 Minutes Between 9 AM and 6 PM')]
    #[Description('Cron expression for executing a task every 30 minutes between 9 AM and 6 PM.')]
    public const EVERY_30_MINUTES_BETWEEN_9AM_AND_6PM = '0 */30 9-18 * *';

    /**
     * Executes every 30 minutes between 10 AM and 7 PM.
     */
    #[Label('Every 30 Minutes Between 10 AM and 7 PM')]
    #[Description('Cron expression for executing a task every 30 minutes between 10 AM and 7 PM.')]
    public const EVERY_30_MINUTES_BETWEEN_10AM_AND_7PM = '0 */30 10-19 * *';

    /**
     * Executes Monday to Friday at 1 AM.
     */
    #[Label('Monday to Friday at 1 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 1 AM.')]
    public const MONDAY_TO_FRIDAY_AT_1AM = '0 0 01 * * 1-5';

    /**
     * Executes Monday to Friday at 2 AM.
     */
    #[Label('Monday to Friday at 2 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 2 AM.')]
    public const MONDAY_TO_FRIDAY_AT_2AM = '0 0 02 * * 1-5';

    /**
     * Executes Monday to Friday at 3 AM.
     */
    #[Label('Monday to Friday at 3 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 3 AM.')]
    public const MONDAY_TO_FRIDAY_AT_3AM = '0 0 03 * * 1-5';

    /**
     * Executes Monday to Friday at 4 AM.
     */
    #[Label('Monday to Friday at 4 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 4 AM.')]
    public const MONDAY_TO_FRIDAY_AT_4AM = '0 0 04 * * 1-5';

    /**
     * Executes Monday to Friday at 5 AM.
     */
    #[Label('Monday to Friday at 5 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 5 AM.')]
    public const MONDAY_TO_FRIDAY_AT_5AM = '0 0 05 * * 1-5';

    /**
     * Executes Monday to Friday at 6 AM.
     */
    #[Label('Monday to Friday at 6 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 6 AM.')]
    public const MONDAY_TO_FRIDAY_AT_6AM = '0 0 06 * * 1-5';

    /**
     * Executes Monday to Friday at 7 AM.
     */
    #[Label('Monday to Friday at 7 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 7 AM.')]
    public const MONDAY_TO_FRIDAY_AT_7AM = '0 0 07 * * 1-5';

    /**
     * Executes Monday to Friday at 8 AM.
     */
    #[Label('Monday to Friday at 8 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 8 AM.')]
    public const MONDAY_TO_FRIDAY_AT_8AM = '0 0 08 * * 1-5';

    /**
     * Executes Monday to Friday at 9 AM.
     */
    #[Label('Monday to Friday at 9 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 9 AM.')]
    public const MONDAY_TO_FRIDAY_AT_9AM = '0 0 09 * * 1-5';

    /**
     * Executes Monday to Friday at 10 AM.
     */
    #[Label('Monday to Friday at 10 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 10 AM.')]
    public const MONDAY_TO_FRIDAY_AT_10AM = '0 0 10 * * 1-5';

    /**
     * Executes Monday to Friday at 11 AM.
     */
    #[Label('Monday to Friday at 11 AM')]
    #[Description('Cron expression for executing a task Monday to Friday at 11 AM.')]
    public const MONDAY_TO_FRIDAY_AT_11AM = '0 0 11 * * 1-5';

    /**
     * Executes Monday to Friday at noon (12 PM).
     */
    #[Label('Monday to Friday at Noon')]
    #[Description('Cron expression for executing a task Monday to Friday at noon (12 PM).')]
    public const MONDAY_TO_FRIDAY_AT_NOON = '0 0 12 * * 1-5';

    /**
     * Executes Monday to Friday at 1 PM.
     */
    #[Label('Monday to Friday at 1 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 1 PM.')]
    public const MONDAY_TO_FRIDAY_AT_1PM = '0 0 13 * * 1-5';

    /**
     * Executes Monday to Friday at 2 PM.
     */
    #[Label('Monday to Friday at 2 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 2 PM.')]
    public const MONDAY_TO_FRIDAY_AT_2PM = '0 0 14 * * 1-5';

    /**
     * Executes Monday to Friday at 3 PM.
     */
    #[Label('Monday to Friday at 3 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 3 PM.')]
    public const MONDAY_TO_FRIDAY_AT_3PM = '0 0 15 * * 1-5';

    /**
     * Executes Monday to Friday at 4 PM.
     */
    #[Label('Monday to Friday at 4 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 4 PM.')]
    public const MONDAY_TO_FRIDAY_AT_4PM = '0 0 16 * * 1-5';

    /**
     * Executes Monday to Friday at 5 PM.
     */
    #[Label('Monday to Friday at 5 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 5 PM.')]
    public const MONDAY_TO_FRIDAY_AT_5PM = '0 0 17 * * 1-5';

    /**
     * Executes Monday to Friday at 6 PM.
     */
    #[Label('Monday to Friday at 6 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 6 PM.')]
    public const MONDAY_TO_FRIDAY_AT_6PM = '0 0 18 * * 1-5';

    /**
     * Executes Monday to Friday at 7 PM.
     */
    #[Label('Monday to Friday at 7 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 7 PM.')]
    public const MONDAY_TO_FRIDAY_AT_7PM = '0 0 19 * * 1-5';

    /**
     * Executes Monday to Friday at 8 PM.
     */
    #[Label('Monday to Friday at 8 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 8 PM.')]
    public const MONDAY_TO_FRIDAY_AT_8PM = '0 0 20 * * 1-5';

    /**
     * Executes Monday to Friday at 9 PM.
     */
    #[Label('Monday to Friday at 9 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 9 PM.')]
    public const MONDAY_TO_FRIDAY_AT_9PM = '0 0 21 * * 1-5';

    /**
     * Executes Monday to Friday at 10 PM.
     */
    #[Label('Monday to Friday at 10 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 10 PM.')]
    public const MONDAY_TO_FRIDAY_AT_10PM = '0 0 22 * * 1-5';

    /**
     * Executes Monday to Friday at 11 PM.
     */
    #[Label('Monday to Friday at 11 PM')]
    #[Description('Cron expression for executing a task Monday to Friday at 11 PM.')]
    public const MONDAY_TO_FRIDAY_AT_11PM = '0 0 23 * * 1-5';

    /**
     * Executes Monday to Friday at midnight (12 AM).
     */
    #[Label('Monday to Friday at Midnight')]
    #[Description('Cron expression for executing a task Monday to Friday at midnight (12 AM).')]
    public const MONDAY_TO_FRIDAY_AT_MIDNIGHT = '0 0 0 * * 1-5';

    /**
     * Executes every Saturday at midnight.
     */
    #[Label('Every Saturday at Midnight')]
    #[Description('Cron expression for executing a task every Saturday at midnight.')]
    public const EVERY_SATURDAY_AT_MIDNIGHT = '0 0 0 * * 6';

    /**
     * Executes every Sunday at midnight.
     */
    #[Label('Every Sunday at Midnight')]
    #[Description('Cron expression for executing a task every Sunday at midnight.')]
    public const EVERY_SUNDAY_AT_MIDNIGHT = '0 0 0 * * 0';

    /**
     * Executes every Saturday and Sunday at midnight.
     */
    #[Label('Every Weekend at Midnight')]
    #[Description('Cron expression for executing a task every Saturday and Sunday at midnight.')]
    public const EVERY_WEEKEND_AT_MIDNIGHT = '0 0 0 * * 6,0';

    /**
     * Executes every day at 2:30 PM.
     */
    #[Label('Every Day at 2:30 PM')]
    #[Description('Cron expression for executing a task every day at 2:30 PM.')]
    public const EVERY_DAY_AT_2_30PM = '30 14 * *';

    /**
     * Executes every weekday (Monday to Friday) at 2:30 PM.
     */
    #[Label('Every Weekday at 2:30 PM')]
    #[Description('Cron expression for executing a task every weekday (Monday to Friday) at 2:30 PM.')]
    public const EVERY_WEEKDAY_AT_2_30PM = '30 14 * * 1-5';

    /**
     * Executes every weekday (Monday to Friday) at 8:45 AM.
     */
    #[Label('Every Weekday at 8:45 AM')]
    #[Description('Cron expression for executing a task every weekday (Monday to Friday) at 8:45 AM.')]
    public const EVERY_WEEKDAY_AT_8_45AM = '45 8 * * 1-5';

    /**
     * Executes on the 15th day of every month at 3 PM.
     */
    #[Label('15th Day of Month at 3 PM')]
    #[Description('Cron expression for executing a task on the 15th day of every month at 3 PM.')]
    public const EVERY_15TH_DAY_OF_MONTH_AT_3PM = '0 15 15 *';

    /**
     * Executes every hour between 8 AM and 6 PM on weekdays (Monday to Friday).
     */
    #[Label('Every Hour Between 8 AM and 6 PM on Weekdays')]
    #[Description('Cron expression for executing a task every hour between 8 AM and 6 PM on weekdays (Monday to Friday).')]
    public const EVERY_HOUR_BETWEEN_8AM_AND_6PM_ON_WEEKDAYS = '0 8-18 * * 1-5';

    /**
     * Executes every 15 minutes.
     */
    #[Label('Every 15 Minutes')]
    #[Description('Cron expression for executing a task every 15 minutes.')]
    public const EVERY_15_MINUTES = '*/15 * * *';

    /**
     * Executes every 20 minutes.
     */
    #[Label('Every 20 Minutes')]
    #[Description('Cron expression for executing a task every 20 minutes.')]
    public const EVERY_20_MINUTES = '*/20 * * *';

    /**
     * Executes every 45 minutes.
     */
    #[Label('Every 45 Minutes')]
    #[Description('Cron expression for executing a task every 45 minutes.')]
    public const EVERY_45_MINUTES = '*/45 * * *';
}
