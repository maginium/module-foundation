<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum for emojis.
 *
 * This enum defines various emojis.
 *
 * @method static self THUMBS_UP() Represents a thumbs up emoji.
 * @method static self THUMBS_DOWN() Represents a thumbs down emoji.
 * @method static self SMILING_FACE() Represents a smiling face emoji.
 * @method static self CRYING_FACE() Represents a crying face emoji.
 * @method static self HEART() Represents a heart emoji.
 * @method static self STAR() Represents a star emoji.
 * @method static self FIRE() Represents a fire emoji.
 * @method static self CLAPPING_HANDS() Represents clapping hands emoji.
 * @method static self PARTY_POPPER() Represents a party popper emoji.
 * @method static self CHECK_MARK() Represents a check mark emoji.
 * @method static self QUESTION_MARK() Represents a question mark emoji.
 * @method static self EXCLAMATION_MARK() Represents an exclamation mark emoji.
 * @method static self LAUGHING_FACE() Represents a laughing face emoji.
 * @method static self WINKING_FACE() Represents a winking face emoji.
 * @method static self ANGRY_FACE() Represents an angry face emoji.
 * @method static self CONFUSED_FACE() Represents a confused face emoji.
 * @method static self SMILING_FACE_WITH_SUNGGLASSES() Represents a smiling face with sunglasses emoji.
 * @method static self THINKING_FACE() Represents a thinking face emoji.
 * @method static self HUGGING_FACE() Represents a hugging face emoji.
 * @method static self KISSING_FACE() Represents a kissing face emoji.
 * @method static self ASTONISHED_FACE() Represents an astonished face emoji.
 * @method static self PARTYING_FACE() Represents a partying face emoji.
 * @method static self ROBOT_FACE() Represents a robot face emoji.
 * @method static self GRINNING_CAT_FACE() Represents a grinning cat face emoji.
 * @method static self DOG_FACE() Represents a dog face emoji.
 * @method static self CAT_FACE() Represents a cat face emoji.
 * @method static self SEE_NO_EVIL_MONKEY() Represents a see-no-evil monkey emoji.
 * @method static self THINKING() Represents a thinking emoji.
 * @method static self TACO() Represents a taco emoji.
 * @method static self PIZZA() Represents a pizza emoji.
 * @method static self BIRTHDAY_CAKE() Represents a birthday cake emoji.
 * @method static self COFFEE() Represents a coffee emoji.
 * @method static self BEER_MUG() Represents a beer mug emoji.
 * @method static self BOTTLE_WITH_POPPING_CORK() Represents a bottle with popping cork emoji.
 * @method static self HEART_EYES() Represents a heart eyes emoji.
 * @method static self CLINKING_GLASSES() Represents clinking glasses emoji.
 * @method static self RAINBOW() Represents a rainbow emoji.
 * @method static self EARTH_GLOBE() Represents an earth globe emoji.
 * @method static self SUN() Represents a sun emoji.
 * @method static self CRESCENT_MOON() Represents a crescent moon emoji.
 * @method static self SNOWFLAKE() Represents a snowflake emoji.
 * @method static self HIGH_VOLTAGE() Represents a high voltage emoji.
 * @method static self CLOUD() Represents a cloud emoji.
 * @method static self DROPLET() Represents a droplet emoji.
 * @method static self MILKY_WAY() Represents a milky way emoji.
 * @method static self SPARKLING_HEART() Represents a sparkling heart emoji.
 * @method static self CROWN() Represents a crown emoji.
 * @method static self SPARKLES() Represents sparkles emoji.
 * @method static self FIREWORKS() Represents fireworks emoji.
 * @method static self SMILING_FACE_WITH_HEARTS() Represents a smiling face with hearts emoji.
 * @method static self FACE_WITH_MEDICAL_MASK() Represents a face with medical mask emoji.
 * @method static self FACE_WITH_THERMOMETER() Represents a face with thermometer emoji.
 * @method static self FACE_WITH_HEAD_BANDAGE() Represents a face with head-bandage emoji.
 * @method static self PLEADING_FACE() Represents a pleading face emoji.
 * @method static self YAWNING_FACE() Represents a yawning face emoji.
 * @method static self COWBOY_HAT_FACE() Represents a cowboy hat face emoji.
 * @method static self FACE_WITH_MONOCLE() Represents a face with monocle emoji.
 * @method static self FACE_WITH_HAND_OVER_MOUTH() Represents a face with hand over mouth emoji.
 * @method static self FACE_WITH_ROLLING_EYES() Represents a face with rolling eyes emoji.
 * @method static self FOG() Represents a fog emoji.
 * @method static self MONKEY_FACE() Represents a monkey face emoji.
 * @method static self HEAR_NO_EVIL_MONKEY() Represents a hear-no-evil monkey emoji.
 * @method static self SPEAK_NO_EVIL_MONKEY() Represents a speak-no-evil monkey emoji.
 * @method static self BEAR_FACE() Represents a bear face emoji.
 * @method static self KOALA() Represents a koala emoji.
 * @method static self PANDA_FACE() Represents a panda face emoji.
 * @method static self UNICORN_FACE() Represents a unicorn face emoji.
 * @method static self EAGLE() Represents an eagle emoji.
 * @method static self FALCON() Represents a falcon emoji.
 * @method static self PEACOCK() Represents a peacock emoji.
 * @method static self SHARK() Represents a shark emoji.
 * @method static self TURTLE() Represents a turtle emoji.
 * @method static self OCTOPUS() Represents an octopus emoji.
 */
class Emojis extends Enum
{
    /**
     * Emoji for thumbs up.
     */
    #[Label('👍')]
    #[Description('Thumbs Up')]
    public const THUMBS_UP = '👍';

    /**
     * Emoji for thumbs down.
     */
    #[Label('👎')]
    #[Description('Thumbs Down')]
    public const THUMBS_DOWN = '👎';

    /**
     * Emoji for smile.
     */
    #[Label('😊')]
    #[Description('Smiling Face')]
    public const SMILING_FACE = '😊';

    /**
     * Emoji for sad face.
     */
    #[Label('😢')]
    #[Description('Crying Face')]
    public const CRYING_FACE = '😢';

    /**
     * Emoji for heart.
     */
    #[Label('❤️')]
    #[Description('Heart')]
    public const HEART = '❤️';

    /**
     * Emoji for star.
     */
    #[Label('⭐')]
    #[Description('Star')]
    public const STAR = '⭐';

    /**
     * Emoji for fire.
     */
    #[Label('🔥')]
    #[Description('Fire')]
    public const FIRE = '🔥';

    /**
     * Emoji for clapping.
     */
    #[Label('👏')]
    #[Description('Clapping Hands')]
    public const CLAPPING_HANDS = '👏';

    /**
     * Emoji for party popper.
     */
    #[Label('🎉')]
    #[Description('Party Popper')]
    public const PARTY_POPPER = '🎉';

    /**
     * Emoji for check mark.
     */
    #[Label('✅')]
    #[Description('Check Mark')]
    public const CHECK_MARK = '✅';

    /**
     * Emoji for question mark.
     */
    #[Label('❓')]
    #[Description('Question Mark')]
    public const QUESTION_MARK = '❓';

    /**
     * Emoji for exclamation mark.
     */
    #[Label('❗')]
    #[Description('Exclamation Mark')]
    public const EXCLAMATION_MARK = '❗';

    /**
     * Emoji for laughing face.
     */
    #[Label('😂')]
    #[Description('Laughing Face')]
    public const LAUGHING_FACE = '😂';

    /**
     * Emoji for winking face.
     */
    #[Label('😉')]
    #[Description('Winking Face')]
    public const WINKING_FACE = '😉';

    /**
     * Emoji for angry face.
     */
    #[Label('😠')]
    #[Description('Angry Face')]
    public const ANGRY_FACE = '😠';

    /**
     * Emoji for confused face.
     */
    #[Label('😕')]
    #[Description('Confused Face')]
    public const CONFUSED_FACE = '😕';

    /**
     * Emoji for sunglasses face.
     */
    #[Label('😎')]
    #[Description('Smiling Face with Sunglasses')]
    public const SMILING_FACE_WITH_SUNGGLASSES = '😎';

    /**
     * Emoji for thinking face.
     */
    #[Label('🤔')]
    #[Description('Thinking Face')]
    public const THINKING_FACE = '🤔';

    /**
     * Emoji for hugging face.
     */
    #[Label('🤗')]
    #[Description('Hugging Face')]
    public const HUGGING_FACE = '🤗';

    /**
     * Emoji for kissing face.
     */
    #[Label('😘')]
    #[Description('Kissing Face')]
    public const KISSING_FACE = '😘';

    /**
     * Emoji for shocked face.
     */
    #[Label('😲')]
    #[Description('Astonished Face')]
    public const ASTONISHED_FACE = '😲';

    /**
     * Emoji for party face.
     */
    #[Label('🥳')]
    #[Description('Partying Face')]
    public const PARTYING_FACE = '🥳';

    /**
     * Emoji for robot.
     */
    #[Label('🤖')]
    #[Description('Robot Face')]
    public const ROBOT_FACE = '🤖';

    /**
     * Emoji for cat face.
     */
    #[Label('😺')]
    #[Description('Grinning Cat Face')]
    public const GRINNING_CAT_FACE = '😺';

    /**
     * Emoji for dog face.
     */
    #[Label('🐶')]
    #[Description('Dog Face')]
    public const DOG_FACE = '🐶';

    /**
     * Emoji for cat.
     */
    #[Label('🐱')]
    #[Description('Cat Face')]
    public const CAT_FACE = '🐱';

    /**
     * Emoji for monkey.
     */
    #[Label('🙈')]
    #[Description('See-No-Evil Monkey')]
    public const SEE_NO_EVIL_MONKEY = '🙈';

    /**
     * Emoji for thinking.
     */
    #[Label('🤔')]
    #[Description('Thinking Face')]
    public const THINKING = '🤔';

    /**
     * Emoji for taco.
     */
    #[Label('🌮')]
    #[Description('Taco')]
    public const TACO = '🌮';

    /**
     * Emoji for pizza.
     */
    #[Label('🍕')]
    #[Description('Pizza')]
    public const PIZZA = '🍕';

    /**
     * Emoji for cake.
     */
    #[Label('🎂')]
    #[Description('Birthday Cake')]
    public const BIRTHDAY_CAKE = '🎂';

    /**
     * Emoji for coffee.
     */
    #[Label('☕')]
    #[Description('Coffee')]
    public const COFFEE = '☕';

    /**
     * Emoji for beer.
     */
    #[Label('🍺')]
    #[Description('Beer Mug')]
    public const BEER_MUG = '🍺';

    /**
     * Emoji for champagne.
     */
    #[Label('🍾')]
    #[Description('Bottle with Popping Cork')]
    public const BOTTLE_WITH_POPPING_CORK = '🍾';

    /**
     * Emoji for heart eyes.
     */
    #[Label('😍')]
    #[Description('Heart Eyes')]
    public const HEART_EYES = '😍';

    /**
     * Emoji for clinking glasses.
     */
    #[Label('🥂')]
    #[Description('Clinking Glasses')]
    public const CLINKING_GLASSES = '🥂';

    /**
     * Emoji for rainbow.
     */
    #[Label('🌈')]
    #[Description('Rainbow')]
    public const RAINBOW = '🌈';

    /**
     * Emoji for globe.
     */
    #[Label('🌍')]
    #[Description('Earth Globe')]
    public const EARTH_GLOBE = '🌍';

    /**
     * Emoji for sun.
     */
    #[Label('☀️')]
    #[Description('Sun')]
    public const SUN = '☀️';

    /**
     * Emoji for moon.
     */
    #[Label('🌙')]
    #[Description('Crescent Moon')]
    public const CRESCENT_MOON = '🌙';

    /**
     * Emoji for snowflake.
     */
    #[Label('❄️')]
    #[Description('Snowflake')]
    public const SNOWFLAKE = '❄️';

    /**
     * Emoji for lightning.
     */
    #[Label('⚡')]
    #[Description('High Voltage')]
    public const HIGH_VOLTAGE = '⚡';

    /**
     * Emoji for cloud.
     */
    #[Label('☁️')]
    #[Description('Cloud')]
    public const CLOUD = '☁️';

    /**
     * Emoji for raindrop.
     */
    #[Label('💧')]
    #[Description('Droplet')]
    public const DROPLET = '💧';

    /**
     * Emoji for starry night.
     */
    #[Label('🌌')]
    #[Description('Milky Way')]
    public const MILKY_WAY = '🌌';

    /**
     * Emoji for sparkling heart.
     */
    #[Label('💖')]
    #[Description('Sparkling Heart')]
    public const SPARKLING_HEART = '💖';

    /**
     * Emoji for crown.
     */
    #[Label('👑')]
    #[Description('Crown')]
    public const CROWN = '👑';

    /**
     * Emoji for sparkling stars.
     */
    #[Label('✨')]
    #[Description('Sparkles')]
    public const SPARKLES = '✨';

    /**
     * Emoji for fireworks.
     */
    #[Label('🎆')]
    #[Description('Fireworks')]
    public const FIREWORKS = '🎆';

    /**
     * Emoji for smiling face with hearts.
     */
    #[Label('🥰')]
    #[Description('Smiling Face with Hearts')]
    public const SMILING_FACE_WITH_HEARTS = '🥰';

    /**
     * Emoji for face with medical mask.
     */
    #[Label('😷')]
    #[Description('Face with Medical Mask')]
    public const FACE_WITH_MEDICAL_MASK = '😷';

    /**
     * Emoji for face with thermometer.
     */
    #[Label('🤒')]
    #[Description('Face with Thermometer')]
    public const FACE_WITH_THERMOMETER = '🤒';

    /**
     * Emoji for face with head-bandage.
     */
    #[Label('🤕')]
    #[Description('Face with Head-Bandage')]
    public const FACE_WITH_HEAD_BANDAGE = '🤕';

    /**
     * Emoji for pleading face.
     */
    #[Label('🥺')]
    #[Description('Pleading Face')]
    public const PLEADING_FACE = '🥺';

    /**
     * Emoji for yawn.
     */
    #[Label('🥱')]
    #[Description('Yawning Face')]
    public const YAWNING_FACE = '🥱';

    /**
     * Emoji for face with cowboy hat.
     */
    #[Label('🤠')]
    #[Description('Cowboy Hat Face')]
    public const COWBOY_HAT_FACE = '🤠';

    /**
     * Emoji for face with monocle.
     */
    #[Label('🧐')]
    #[Description('Face with Monocle')]
    public const FACE_WITH_MONOCLE = '🧐';

    /**
     * Emoji for face with hand over mouth.
     */
    #[Label('🤭')]
    #[Description('Face with Hand Over Mouth')]
    public const FACE_WITH_HAND_OVER_MOUTH = '🤭';

    /**
     * Emoji for face with rolling eyes.
     */
    #[Label('🙄')]
    #[Description('Face with Rolling Eyes')]
    public const FACE_WITH_ROLLING_EYES = '🙄';

    /**
     * Emoji for face in clouds.
     */
    #[Label('🌫️')]
    #[Description('Fog')]
    public const FOG = '🌫️';

    /**
     * Emoji for monkey face.
     */
    #[Label('🐵')]
    #[Description('Monkey Face')]
    public const MONKEY_FACE = '🐵';

    /**
     * Emoji for monkey covering ears.
     */
    #[Label('🙉')]
    #[Description('Hear-No-Evil Monkey')]
    public const HEAR_NO_EVIL_MONKEY = '🙉';

    /**
     * Emoji for monkey covering mouth.
     */
    #[Label('🙊')]
    #[Description('Speak-No-Evil Monkey')]
    public const SPEAK_NO_EVIL_MONKEY = '🙊';

    /**
     * Emoji for bear face.
     */
    #[Label('🐻')]
    #[Description('Bear Face')]
    public const BEAR_FACE = '🐻';

    /**
     * Emoji for koala.
     */
    #[Label('🐨')]
    #[Description('Koala')]
    public const KOALA = '🐨';

    /**
     * Emoji for panda face.
     */
    #[Label('🐼')]
    #[Description('Panda Face')]
    public const PANDA_FACE = '🐼';

    /**
     * Emoji for unicorn.
     */
    #[Label('🦄')]
    #[Description('Unicorn Face')]
    public const UNICORN_FACE = '🦄';

    /**
     * Emoji for eagle.
     */
    #[Label('🦅')]
    #[Description('Eagle')]
    public const EAGLE = '🦅';

    /**
     * Emoji for falcon.
     */
    #[Label('🦅')]
    #[Description('Falcon')]
    public const FALCON = '🦅';

    /**
     * Emoji for peacock.
     */
    #[Label('🦚')]
    #[Description('Peacock')]
    public const PEACOCK = '🦚';

    /**
     * Emoji for shark.
     */
    #[Label('🦈')]
    #[Description('Shark')]
    public const SHARK = '🦈';

    /**
     * Emoji for turtle.
     */
    #[Label('🐢')]
    #[Description('Turtle')]
    public const TURTLE = '🐢';

    /**
     * Emoji for octopus.
     */
    #[Label('🐙')]
    #[Description('Octopus')]
    public const OCTOPUS = '🐙';

    /**
     * Emoji for crab.
     */
    #[Label('🦀')]
    #[Description('Crab')]
    public const CRAB = '🦀';

    /**
     * Emoji for spider.
     */
    #[Label('🕷️')]
    #[Description('Spider')]
    public const SPIDER = '🕷️';

    /**
     * Emoji for spider web.
     */
    #[Label('🕸️')]
    #[Description('Spider Web')]
    public const SPIDER_WEB = '🕸️';

    /**
     * Emoji for lady beetle.
     */
    #[Label('🐞')]
    #[Description('Lady Beetle')]
    public const LADY_BUG = '🐞';

    /**
     * Emoji for honeybee.
     */
    #[Label('🐝')]
    #[Description('Honeybee')]
    public const HONEYBEE = '🐝';

    /**
     * Emoji for sunflower.
     */
    #[Label('🌻')]
    #[Description('Sunflower')]
    public const SUNFLOWER = '🌻';

    /**
     * Emoji for sunflower.
     */
    #[Label('🌷')]
    #[Description('Tulip')]
    public const TULIP = '🌷';

    /**
     * Emoji for tree.
     */
    #[Label('🌳')]
    #[Description('Deciduous Tree')]
    public const DECIDUOUS_TREE = '🌳';

    /**
     * Emoji for cactus.
     */
    #[Label('🌵')]
    #[Description('Cactus')]
    public const CACTUS = '🌵';

    /**
     * Emoji for herb.
     */
    #[Label('🌿')]
    #[Description('Herb')]
    public const HERB = '🌿';

    /**
     * Emoji for rose.
     */
    #[Label('🌹')]
    #[Description('Rose')]
    public const ROSE = '🌹';

    /**
     * Emoji for bouquet.
     */
    #[Label('💐')]
    #[Description('Bouquet')]
    public const BOUQUET = '💐';

    /**
     * Emoji for globe showing Europe and Africa.
     */
    #[Label('🌍')]
    #[Description('Earth Globe Europe-Africa')]
    public const EARTH_GLOBE_EUROPE_AFRICA = '🌍';

    /**
     * Emoji for globe showing Americas.
     */
    #[Label('🌎')]
    #[Description('Earth Globe Americas')]
    public const EARTH_GLOBE_AMERICAS = '🌎';

    /**
     * Emoji for globe showing Asia and Australia.
     */
    #[Label('🌏')]
    #[Description('Earth Globe Asia-Australia')]
    public const EARTH_GLOBE_ASIA_AUSTRALIA = '🌏';

    /**
     * Emoji for globe with meridians.
     */
    #[Label('🌐')]
    #[Description('Globe with Meridians')]
    public const GLOBE_WITH_MERIDIANS = '🌐';

    /**
     * Emoji for spiral calendar.
     */
    #[Label('🗓️')]
    #[Description('Spiral Calendar')]
    public const SPIRAL_CALENDAR = '🗓️';

    /**
     * Emoji for notebook.
     */
    #[Label('📒')]
    #[Description('Notebook')]
    public const NOTEBOOK = '📒';

    /**
     * Emoji for book.
     */
    #[Label('📚')]
    #[Description('Books')]
    public const BOOKS = '📚';

    /**
     * Emoji for opened book.
     */
    #[Label('📖')]
    #[Description('Open Book')]
    public const OPEN_BOOK = '📖';

    /**
     * Emoji for scissors.
     */
    #[Label('✂️')]
    #[Description('Scissors')]
    public const SCISSORS = '✂️';

    /**
     * Emoji for pencil.
     */
    #[Label('✏️')]
    #[Description('Pencil')]
    public const PENCIL = '✏️';

    /**
     * Emoji for pen.
     */
    #[Label('🖊️')]
    #[Description('Pen')]
    public const PEN = '🖊️';

    /**
     * Emoji for paintbrush.
     */
    #[Label('🖌️')]
    #[Description('Paintbrush')]
    public const PAINTBRUSH = '🖌️';

    /**
     * Emoji for palette.
     */
    #[Label('🎨')]
    #[Description('Artist Palette')]
    public const ARTIST_PALETTE = '🎨';

    /**
     * Emoji for musical note.
     */
    #[Label('🎵')]
    #[Description('Musical Note')]
    public const MUSICAL_NOTE = '🎵';

    /**
     * Emoji for waving hand.
     */
    #[Label('👋')]
    #[Description('Waving Hand')]
    public const WAVING_HAND = '👋';

    /**
     * Emoji for raised hand.
     */
    #[Label('✋')]
    #[Description('Raised Hand')]
    public const RAISED_HAND = '✋';

    /**
     * Emoji for flexed biceps.
     */
    #[Label('💪')]
    #[Description('Flexed Biceps')]
    public const FLEXED_BICEPS = '💪';

    /**
     * Emoji for raised fist.
     */
    #[Label('✊')]
    #[Description('Raised Fist')]
    public const RAISED_FIST = '✊';

    /**
     * Emoji for handshake.
     */
    #[Label('🤝')]
    #[Description('Handshake')]
    public const HANDSHAKE = '🤝';

    /**
     * Emoji for heart.
     */
    #[Label('❤️')]
    #[Description('Red Heart')]
    public const RED_HEART = '❤️';

    /**
     * Emoji for broken heart.
     */
    #[Label('💔')]
    #[Description('Broken Heart')]
    public const BROKEN_HEART = '💔';

    /**
     * Emoji for two hearts.
     */
    #[Label('💕')]
    #[Description('Two Hearts')]
    public const TWO_HEARTS = '💕';

    /**
     * Emoji for heart with arrow.
     */
    #[Label('💘')]
    #[Description('Heart with Arrow')]
    public const HEART_WITH_ARROW = '💘';

    /**
     * Emoji for heart with ribbon.
     */
    #[Label('💝')]
    #[Description('Heart with Ribbon')]
    public const HEART_WITH_RIBBON = '💝';

    /**
     * Emoji for wedding.
     */
    #[Label('💍')]
    #[Description('Ring')]
    public const RING = '💍';

    /**
     * Emoji for water wave.
     */
    #[Label('🌊')]
    #[Description('Water Wave')]
    public const WATER_WAVE = '🌊';

    /**
     * Emoji for Christmas tree.
     */
    #[Label('🎄')]
    #[Description('Christmas Tree')]
    public const CHRISTMAS_TREE = '🎄';

    /**
     * Emoji for gift.
     */
    #[Label('🎁')]
    #[Description('Wrapped Gift')]
    public const WRAPPED_GIFT = '🎁';

    /**
     * Emoji for balloon.
     */
    #[Label('🎈')]
    #[Description('Balloon')]
    public const BALLOON = '🎈';

    /**
     * Emoji for confetti ball.
     */
    #[Label('🎊')]
    #[Description('Confetti Ball')]
    public const CONFETTI_BALL = '🎊';

    /**
     * Emoji for horse.
     */
    #[Label('🐴')]
    #[Description('Horse Face')]
    public const HORSE_FACE = '🐴';

    /**
     * Emoji for pig.
     */
    #[Label('🐷')]
    #[Description('Pig Face')]
    public const PIG_FACE = '🐷';

    /**
     * Emoji for rabbit.
     */
    #[Label('🐰')]
    #[Description('Rabbit Face')]
    public const RABBIT_FACE = '🐰';

    /**
     * Emoji for lion.
     */
    #[Label('🦁')]
    #[Description('Lion Face')]
    public const LION_FACE = '🦁';

    /**
     * Emoji for elephant.
     */
    #[Label('🐘')]
    #[Description('Elephant')]
    public const ELEPHANT = '🐘';

    /**
     * Emoji for chicken.
     */
    #[Label('🐔')]
    #[Description('Chicken')]
    public const CHICKEN = '🐔';

    /**
     * Emoji for frog.
     */
    #[Label('🐸')]
    #[Description('Frog')]
    public const FROG = '🐸';

    /**
     * Emoji for penguin.
     */
    #[Label('🐧')]
    #[Description('Penguin')]
    public const PENGUIN = '🐧';

    /**
     * Emoji for apple.
     */
    #[Label('🍎')]
    #[Description('Red Apple')]
    public const RED_APPLE = '🍎';

    /**
     * Emoji for banana.
     */
    #[Label('🍌')]
    #[Description('Banana')]
    public const BANANA = '🍌';

    /**
     * Emoji for watermelon.
     */
    #[Label('🍉')]
    #[Description('Watermelon')]
    public const WATERMELON = '🍉';

    /**
     * Emoji for ice cream.
     */
    #[Label('🍦')]
    #[Description('Soft Ice Cream')]
    public const SOFT_ICE_CREAM = '🍦';

    /**
     * Emoji for burger.
     */
    #[Label('🍔')]
    #[Description('Hamburger')]
    public const HAMBURGER = '🍔';

    /**
     * Emoji for hot dog.
     */
    #[Label('🌭')]
    #[Description('Hot Dog')]
    public const HOT_DOG = '🌭';

    /**
     * Emoji for coffee.
     */
    #[Label('☕')]
    #[Description('Hot Beverage')]
    public const HOT_BEVERAGE = '☕';

    /**
     * Emoji for cocktail.
     */
    #[Label('🍹')]
    #[Description('Tropical Drink')]
    public const TROPICAL_DRINK = '🍹';

    /**
     * Emoji for wine glass.
     */
    #[Label('🍷')]
    #[Description('Wine Glass')]
    public const WINE_GLASS = '🍷';

    /**
     * Emoji for running.
     */
    #[Label('🏃‍♂️')]
    #[Description('Man Running')]
    public const MAN_RUNNING = '🏃‍♂️';

    /**
     * Emoji for cycling.
     */
    #[Label('🚴‍♀️')]
    #[Description('Woman Biking')]
    public const WOMAN_BIKING = '🚴‍♀️';

    /**
     * Emoji for swimming.
     */
    #[Label('🏊‍♂️')]
    #[Description('Man Swimming')]
    public const MAN_SWIMMING = '🏊‍♂️';

    /**
     * Emoji for skiing.
     */
    #[Label('⛷️')]
    #[Description('Skier')]
    public const SKIER = '⛷️';

    /**
     * Emoji for skateboard.
     */
    #[Label('🛹')]
    #[Description('Skateboard')]
    public const SKATEBOARD = '🛹';

    /**
     * Emoji for information.
     */
    #[Label('ℹ️')]
    #[Description('Information')]
    public const INFO = 'ℹ️';

    /**
     * Emoji for success.
     */
    #[Label('✅')]
    #[Description('Check Mark')]
    public const SUCCESS = '✅';

    /**
     * Emoji for warning.
     */
    #[Label('⚠️')]
    #[Description('Warning')]
    public const WARNING = '⚠️';

    /**
     * Emoji for bug.
     */
    #[Label('🐛')]
    #[Description('Bug')]
    public const BUG = '🐛';

    /**
     * Emoji for question.
     */
    #[Label('❓')]
    #[Description('Question Mark')]
    public const QUESTION = '❓';

    /**
     * Emoji for exclamation mark.
     */
    #[Label('❗')]
    #[Description('Exclamation Mark')]
    public const EXCLAMATION = '❗';

    /**
     * Emoji for hourglass.
     */
    #[Label('⏳')]
    #[Description('Hourglass Not Done')]
    public const HOURGLASS_NOT_DONE = '⏳';

    /**
     * Emoji for hourglass done.
     */
    #[Label('⌛')]
    #[Description('Hourglass Done')]
    public const HOURGLASS_DONE = '⌛';

    /**
     * Emoji for light bulb.
     */
    #[Label('💡')]
    #[Description('Light Bulb')]
    public const LIGHT_BULB = '💡';

    /**
     * Emoji for lock.
     */
    #[Label('🔒')]
    #[Description('Locked')]
    public const LOCK = '🔒';

    /**
     * Emoji for unlock.
     */
    #[Label('🔓')]
    #[Description('Unlocked')]
    public const UNLOCK = '🔓';

    /**
     * Emoji for alarm clock.
     */
    #[Label('⏰')]
    #[Description('Alarm Clock')]
    public const ALARM_CLOCK = '⏰';

    /**
     * Emoji for clipboard.
     */
    #[Label('📋')]
    #[Description('Clipboard')]
    public const CLIPBOARD = '📋';

    /**
     * Emoji for paper.
     */
    #[Label('📄')]
    #[Description('Page Facing Up')]
    public const PAGE_FACING_UP = '📄';

    /**
     * Emoji for tools.
     */
    #[Label('🛠️')]
    #[Description('Hammer and Wrench')]
    public const TOOLS = '🛠️';

    /**
     * Emoji for gears.
     */
    #[Label('⚙️')]
    #[Description('Gear')]
    public const GEAR = '⚙️';

    /**
     * Emoji for pushpin.
     */
    #[Label('📌')]
    #[Description('Pushpin')]
    public const PUSH_PIN = '📌';

    /**
     * Emoji for cross mark.
     */
    #[Label('❌')]
    #[Description('Cross Mark')]
    public const CROSS_MARK = '❌';

    /**
     * Emoji for police car light (alert).
     */
    #[Label('🚨')]
    #[Description('Police Car Light')]
    public const POLICE_CAR_LIGHT = '🚨';
}
