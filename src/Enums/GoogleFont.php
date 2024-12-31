<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing various styles.
 *
 * @method static self ABEEZEE() ABeeZee
 * @method static self ABEL() Abel
 * @method static self ABHAYA_LIBRE() Abhaya Libre
 * @method static self ABRIL_FATFACE() Abril Fatface
 * @method static self ACLONICA() Aclonica
 * @method static self ACME() Acme
 * @method static self ACTOR() Actor
 * @method static self ADAMINA() Adamina
 * @method static self ADVENT_PRO() Advent Pro
 * @method static self AGUAFINA_SCRIPT() Aguafina Script
 * @method static self AKRONIM() Akronim
 * @method static self ALADIN() Aladin
 * @method static self ALDRICH() Aldrich
 * @method static self ALEF() Alef
 * @method static self ALEGREYA() Alegreya
 * @method static self ALEGREYA_SC() Alegreya SC
 * @method static self ALEGREYA_SANS() Alegreya Sans
 * @method static self ALEGREYA_SANS_SC() Alegreya Sans SC
 * @method static self ALEX_BRUSH() Alex Brush
 * @method static self ALFA_SLAB_ONE() Alfa Slab One
 * @method static self ALICE() Alice
 * @method static self ALIKE() Alike
 * @method static self ALIKE_ANGULAR() Alike Angular
 * @method static self ALLAN() Allan
 * @method static self ALLERTA() Allerta
 * @method static self ALLERTA_STENCIL() Allerta Stencil
 * @method static self ALLURA() Allura
 * @method static self ALMENDRA() Almendra
 * @method static self ALMENDRA_DISPLAY() Almendra Display
 * @method static self ALMENDRA_SC() Almendra SC
 * @method static self AMARANTE() Amarante
 * @method static self AMARANTH() Amaranth
 * @method static self AMATIC_SC() Amatic SC
 * @method static self AMETHYSTA() Amethysta
 * @method static self AMIKO() Amiko
 * @method static self AMIRI() Amiri
 * @method static self AMITA() Amita
 * @method static self ANAHEIM() Anaheim
 * @method static self ANDADA() Andada
 * @method static self ANDIKA() Andika
 * @method static self ANGKOR() Angkor
 * @method static self ANNIE_USE_YOUR() Annie Use Your
 * @method static self ANONYMOUS_PRO() Anonymous Pro
 * @method static self ANTIC() Antic
 * @method static self ANTIC_DIDONE() Antic Didone
 * @method static self ANTIC_SLAB() Antic Slab
 * @method static self ANTON() Anton
 * @method static self ARAPEY() Arapey
 * @method static self ARBUTUS() Arbutus
 * @method static self ARBUTUS_SLAB() Arbutus Slab
 * @method static self ARCHITECTS_DAUGHTER() Architects Daughter
 * @method static self ARCHIVO() Archivo
 * @method static self ARCHIVO_BLACK() Archivo Black
 * @method static self ARCHIVO_NARROW() Archivo Narrow
 * @method static self AREF_RUQAA() Aref Ruqaa
 * @method static self ARIMA_MADURAI() Arima Madurai
 * @method static self ARIMO() Arimo
 * @method static self ARIZONIA() Arizonia
 * @method static self ARMATA() Armata
 * @method static self ARSENAL() Arsenal
 * @method static self ARTIFIKA() Artifika
 * @method static self ARVO() Arvo
 * @method static self ARYA() Arya
 * @method static self ASAP() Asap
 * @method static self ASAP_CONDENSED() Asap Condensed
 * @method static self ASAR() Asar
 * @method static self ASSET() Asset
 * @method static self ASSISTANT() Assistant
 * @method static self ASTLOCH() Astloch
 * @method static self ASUL() Asul
 * @method static self ATHITI() Athiti
 * @method static self ATMA() Atma
 * @method static self ATOMIC_AGE() Atomic Age
 * @method static self AUBREY() Aubrey
 * @method static self AUDIOWIDE() Audiowide
 * @method static self AUTOUR_ONE() Autour One
 * @method static self AVERAGE() Average
 * @method static self AVERAGE_SANS() Average Sans
 * @method static self AVERIA_GRUESA_LIBRE() Averia Gruesa Libre
 * @method static self AVERIA_LIBRE() Averia Libre
 * @method static self AVERIA_SANS_LIBRE() Averia Sans Libre
 * @method static self AVERIA_SERIF_LIBRE() Averia Serif Libre
 * @method static self BAD_SCRIPT() Bad Script
 * @method static self BAHIANA() Bahiana
 * @method static self BALOO() Baloo
 * @method static self BALOO_BHAI() Baloo Bhai
 * @method static self BALOO_BHAIJAAN() Baloo Bhaijaan
 * @method static self BALOO_BHAINA() Baloo Bhaina
 * @method static self BALOO_CHETTAN() Baloo Chettan
 * @method static self BALOO_DA() Baloo Da
 * @method static self BALOO_PAAJI() Baloo Paaji
 * @method static self BALOO_TAMMA() Baloo Tamma
 * @method static self BALOO_TAMMUDU() Baloo Tammudu
 * @method static self BALOO_THAMBI() Baloo Thambi
 * @method static self BALTHAZAR() Balthazar
 * @method static self BANGERS() Bangers
 * @method static self BARLOW() Barlow
 * @method static self BARLOW_CONDENSED() Barlow Condensed
 * @method static self BARLOW_SEMI_CONDENSED() Barlow Semi Condensed
 * @method static self BARRIO() Barrio
 * @method static self BASIC() Basic
 * @method static self BATTAMBANG() Battambang
 * @method static self BAUMANS() Baumans
 * @method static self BAYON() Bayon
 * @method static self BELGRANO() Belgrano
 * @method static self BELLEFAIR() Bellefair
 * @method static self BELLEZA() Belleza
 * @method static self BENCHNINE() BenchNine
 * @method static self BENTHAM() Bentham
 * @method static self BERKSHIRE_SWASH() Berkshire Swash
 * @method static self BEVAN() Bevan
 * @method static self BIGELOW_RULES() Bigelow Rules
 * @method static self BIGSHOT_ONE() Bigshot One
 * @method static self BILBO() Bilbo
 * @method static self BILBO_SWASH_CAPS() Bilbo Swash Caps
 * @method static self BIORHYME() BioRhyme
 * @method static self BIORHYME_EXPANDED() BioRhyme Expanded
 * @method static self BIRYANI() Biryani
 * @method static self BITTER() Bitter
 * @method static self BLACK_OPS_ONE() Black Ops One
 * @method static self BOKOR() Bokor
 * @method static self BONBON() Bonbon
 * @method static self BOOGALOO() Boogaloo
 * @method static self BOWLBY_ONE() Bowlby One
 * @method static self BOWLBY_ONE_SC() Bowlby One SC
 * @method static self BRAWLER() Brawler
 * @method static self BREE_SERIF() Bree Serif
 * @method static self BUBBLEGUM_SANS() Bubblegum Sans
 * @method static self BUBBLER_ONE() Bubbler One
 * @method static self BUDA() Buda
 * @method static self BUENARD() Buenard
 * @method static self BUNGEE() Bungee
 * @method static self BUNGEE_HAIRLINE() Bungee Hairline
 * @method static self BUNGEE_INLINE() Bungee Inline
 * @method static self BUNGEE_OUTLINE() Bungee Outline
 * @method static self BUNGEE_SHADE() Bungee Shade
 * @method static self BUTCHERMAN() Butcherman
 * @method static self BUTTERFLY_KIDS() Butterfly Kids
 * @method static self CABIN() Cabin
 * @method static self CABIN_CONDENSED() Cabin Condensed
 * @method static self CABIN_SKETCH() Cabin Sketch
 * @method static self CAESAR_DRESSING() Caesar Dressing
 * @method static self CAGLIOSTRO() Cagliostro
 * @method static self CAIRO() Cairo
 * @method static self CALLIGRAFFITTI() Calligraffitti
 * @method static self CAMBAY() Cambay
 * @method static self CAMBO() Cambo
 * @method static self CANDAL() Candal
 * @method static self CANTARELL() Cantarell
 * @method static self CANTATA_ONE() Cantata One
 * @method static self CANTORA_ONE() Cantora One
 * @method static self CAPRIOLA() Capriola
 * @method static self CARDO() Cardo
 * @method static self CARME() Carme
 * @method static self CARROIS_GOTHIC() Carrois Gothic
 * @method static self CARROIS_GOTHIC_SC() Carrois Gothic SC
 * @method static self CARTER_ONE() Carter One
 * @method static self CATAMARAN() Catamaran
 * @method static self CAUDEX() Caudex
 * @method static self CAVEAT() Caveat
 * @method static self CAVEAT_BRUSH() Caveat Brush
 * @method static self CEDARVILLE_CURSIVE() Cedarville Cursive
 * @method static self CEVICHE_ONE() Ceviche One
 * @method static self CHANGA() Changa
 * @method static self CHANGA_ONE() Changa One
 * @method static self CHANGO() Chango
 * @method static self CHATHURA() Chathura
 * @method static self CHAU_PHILOMENE_ONE() Chau Philomene One
 * @method static self CHELA_ONE() Chela One
 * @method static self CHELSEA_MARKET() Chelsea Market
 * @method static self CHENLA() Chenla
 * @method static self CHERRY_CREAM_SODA() Cherry Cream Soda
 * @method static self CHERRY_SWASH() Cherry Swash
 * @method static self CHEWY() Chewy
 * @method static self CHICLE() Chicle
 * @method static self CHIVO() Chivo
 * @method static self CHONBURI() Chonburi
 * @method static self CINZEL() Cinzel
 * @method static self CINZEL_DECORATIVE() Cinzel Decorative
 * @method static self CLICKER_SCRIPT() Clicker Script
 * @method static self CODA() Coda
 * @method static self CODA_CAPTION() Coda Caption
 * @method static self CODYSTAR() Codystar
 * @method static self COINY() Coiny
 * @method static self COMBO() Combo
 * @method static self COMFORTAA() Comfortaa
 * @method static self COMING_SOON() Coming Soon
 * @method static self CONCERT_ONE() Concert One
 * @method static self CONDIMENT() Condiment
 * @method static self CONTENT() Content
 * @method static self CONTRAIL_ONE() Contrail One
 * @method static self CONVERGENCE() Convergence
 * @method static self COOKIE() Cookie
 * @method static self COPSE() Copse
 * @method static self CORBEN() Corben
 * @method static self CORMORANT() Cormorant
 * @method static self CORMORANT_GARAMOND() Cormorant Garamond
 * @method static self CORMORANT_INFANT() Cormorant Infant
 * @method static self CORMORANT_SC() Cormorant SC
 * @method static self CORMORANT_UNICASE() Cormorant Unicase
 * @method static self CORMORANT_UPRIGHT() Cormorant Upright
 * @method static self COURGETTE() Courgette
 * @method static self COUSINE() Cousine
 * @method static self COUSTARD() Coustard
 * @method static self COVERED_BY_YOUR() Covered By Your
 * @method static self CRAFTY_GIRLS() Crafty Girls
 * @method static self CREEPSTER() Creepster
 * @method static self CRETE_ROUND() Crete Round
 * @method static self CRIMSON_TEXT() Crimson Text
 * @method static self CROISSANT_ONE() Croissant One
 * @method static self CRUSHED() Crushed
 * @method static self CUPRUM() Cuprum
 * @method static self CUTIVE() Cutive
 * @method static self CUTIVE_MONO() Cutive Mono
 * @method static self DAMION() Damion
 * @method static self DANCING_SCRIPT() Dancing Script
 * @method static self DANGREK() Dangrek
 * @method static self DAVID_LIBRE() David Libre
 * @method static self DAWNING_OF_A() Dawning of a
 * @method static self DAYS_ONE() Days One
 * @method static self DEKKO() Dekko
 * @method static self DELIUS() Delius
 * @method static self DELIUS_SWASH_CAPS() Delius Swash Caps
 * @method static self DELIUS_UNICASE() Delius Unicase
 * @method static self DELLA_RESPIRA() Della Respira
 * @method static self DENK_ONE() Denk One
 * @method static self DEVONSHIRE() Devonshire
 * @method static self DHURJATI() Dhurjati
 * @method static self DIDACT_GOTHIC() Didact Gothic
 * @method static self DIPLOMATA() Diplomata
 * @method static self DIPLOMATA_SC() Diplomata SC
 * @method static self DOMINE() Domine
 * @method static self DONEGAL_ONE() Donegal One
 * @method static self DOPPIO_ONE() Doppio One
 * @method static self DORSA() Dorsa
 * @method static self DOSIS() Dosis
 * @method static self DR_SUGIYAMA() Dr Sugiyama
 * @method static self DURU_SANS() Duru Sans
 * @method static self DYNALIGHT() Dynalight
 * @method static self EB_GARAMOND() EB Garamond
 * @method static self EAGLE_LAKE() Eagle Lake
 * @method static self EATER() Eater
 * @method static self ECONOMICA() Economica
 * @method static self ECZAR() Eczar
 * @method static self EL_MESSIRI() El Messiri
 * @method static self ELECTROLIZE() Electrolize
 * @method static self ELSIE() Elsie
 * @method static self ELSIE_SWASH_CAPS() Elsie Swash Caps
 * @method static self EMBLEMA_ONE() Emblema One
 * @method static self EMILYS_CANDY() Emilys Candy
 * @method static self ENCODE_SANS() Encode Sans
 * @method static self ENCODE_SANS_CONDENSED() Encode Sans Condensed
 * @method static self ENCODE_SANS_EXPANDED() Encode Sans Expanded
 * @method static self ENCODE_SANS_SEMI() Encode Sans Semi
 * @method static self ENCODE_SANS_SEMI() Encode Sans Semi
 * @method static self ENGAGEMENT() Engagement
 * @method static self ENGLEBERT() Englebert
 * @method static self ENRIQUETA() Enriqueta
 * @method static self ERICA_ONE() Erica One
 * @method static self ESTEBAN() Esteban
 * @method static self EUPHORIA_SCRIPT() Euphoria Script
 * @method static self EWERT() Ewert
 * @method static self EXO() Exo
 * @method static self EXO_2() Exo 2
 * @method static self EXPLETUS_SANS() Expletus Sans
 * @method static self FANWOOD_TEXT() Fanwood Text
 * @method static self FARSAN() Farsan
 * @method static self FASCINATE() Fascinate
 * @method static self FASCINATE_INLINE() Fascinate Inline
 * @method static self FASTER_ONE() Faster One
 * @method static self FASTHAND() Fasthand
 * @method static self FAUNA_ONE() Fauna One
 * @method static self FAUSTINA() Faustina
 * @method static self FEDERANT() Federant
 * @method static self FEDERO() Federo
 * @method static self FELIPA() Felipa
 * @method static self FENIX() Fenix
 * @method static self FINGER_PAINT() Finger Paint
 * @method static self FIRA_MONO() Fira Mono
 * @method static self FIRA_SANS() Fira Sans
 * @method static self FIRA_SANS_CONDENSED() Fira Sans Condensed
 * @method static self FIRA_SANS_EXTRA() Fira Sans Extra
 * @method static self FJALLA_ONE() Fjalla One
 * @method static self FJORD_ONE() Fjord One
 * @method static self FLAMENCO() Flamenco
 * @method static self FLAVORS() Flavors
 * @method static self FONDAMENTO() Fondamento
 * @method static self FONTDINER_SWANKY() Fontdiner Swanky
 * @method static self FORUM() Forum
 * @method static self FRANCOIS_ONE() Francois One
 * @method static self FRANK_RUHL_LIBRE() Frank Ruhl Libre
 * @method static self FRECKLE_FACE() Freckle Face
 * @method static self FREDERICKA_THE_GREAT() Fredericka the Great
 * @method static self FREDOKA_ONE() Fredoka One
 * @method static self FREEHAND() Freehand
 * @method static self FRESCA() Fresca
 * @method static self FRIJOLE() Frijole
 * @method static self FRUKTUR() Fruktur
 * @method static self FUGAZ_ONE() Fugaz One
 * @method static self GFS_DIDOT() GFS Didot
 * @method static self GFS_NEOHELLENIC() GFS Neohellenic
 * @method static self GABRIELA() Gabriela
 * @method static self GAFATA() Gafata
 * @method static self GALADA() Galada
 * @method static self GALDEANO() Galdeano
 * @method static self GALINDO() Galindo
 * @method static self GENTIUM_BASIC() Gentium Basic
 * @method static self GENTIUM_BOOK_BASIC() Gentium Book Basic
 * @method static self GEO() Geo
 * @method static self GEOSTAR() Geostar
 * @method static self GEOSTAR_FILL() Geostar Fill
 * @method static self GERMANIA_ONE() Germania One
 * @method static self GIDUGU() Gidugu
 * @method static self GILDA_DISPLAY() Gilda Display
 * @method static self GIVE_YOU_GLORY() Give You Glory
 * @method static self GLASS_ANTIQUA() Glass Antiqua
 * @method static self GLEGOO() Glegoo
 * @method static self GLORIA_HALLELUJAH() Gloria Hallelujah
 * @method static self GOBLIN_ONE() Goblin One
 * @method static self GOCHI_HAND() Gochi Hand
 * @method static self GORDITAS() Gorditas
 * @method static self GOUDY_BOOKLETTER_1911() Goudy Bookletter 1911
 * @method static self GRADUATE() Graduate
 * @method static self GRAND_HOTEL() Grand Hotel
 * @method static self GRAVITAS_ONE() Gravitas One
 * @method static self GREAT_VIBES() Great Vibes
 * @method static self GRIFFY() Griffy
 * @method static self GRUPPO() Gruppo
 * @method static self GUDEA() Gudea
 * @method static self GURAJADA() Gurajada
 * @method static self HABIBI() Habibi
 * @method static self HALANT() Halant
 * @method static self HAMMERSMITH_ONE() Hammersmith One
 * @method static self HANALEI() Hanalei
 * @method static self HANALEI_FILL() Hanalei Fill
 * @method static self HANDLEE() Handlee
 * @method static self HANUMAN() Hanuman
 * @method static self HAPPY_MONKEY() Happy Monkey
 * @method static self HARMATTAN() Harmattan
 * @method static self HEADLAND_ONE() Headland One
 * @method static self HEEBO() Heebo
 * @method static self HENNY_PENNY() Henny Penny
 * @method static self HERR_VON_MUELLERHOFF() Herr Von Muellerhoff
 * @method static self HIND() Hind
 * @method static self HIND_GUNTUR() Hind Guntur
 * @method static self HIND_MADURAI() Hind Madurai
 * @method static self HIND_SILIGURI() Hind Siliguri
 * @method static self HIND_VADODARA() Hind Vadodara
 * @method static self HOLTWOOD_ONE_SC() Holtwood One SC
 * @method static self HOMEMADE_APPLE() Homemade Apple
 * @method static self HOMENAJE() Homenaje
 * @method static self IM_FELL_DW() IM Fell DW
 * @method static self IM_FELL_DW() IM Fell DW
 * @method static self IM_FELL_DOUBLE() IM Fell Double
 * @method static self IM_FELL_DOUBLE() IM Fell Double
 * @method static self IM_FELL_ENGLISH() IM Fell English
 * @method static self IM_FELL_ENGLISH() IM Fell English
 * @method static self IM_FELL_FRENCH() IM Fell French
 * @method static self IM_FELL_FRENCH() IM Fell French
 * @method static self IM_FELL_GREAT() IM Fell Great
 * @method static self IM_FELL_GREAT() IM Fell Great
 * @method static self ICEBERG() Iceberg
 * @method static self ICELAND() Iceland
 * @method static self IMPRIMA() Imprima
 * @method static self INCONSOLATA() Inconsolata
 * @method static self INDER() Inder
 * @method static self INDIE_FLOWER() Indie Flower
 * @method static self INIKA() Inika
 * @method static self INKNUT_ANTIQUA() Inknut Antiqua
 * @method static self IRISH_GROVER() Irish Grover
 * @method static self ISTOK_WEB() Istok Web
 * @method static self ITALIANA() Italiana
 * @method static self ITALIANNO() Italianno
 * @method static self ITIM() Itim
 * @method static self JACQUES_FRANCOIS() Jacques Francois
 * @method static self JACQUES_FRANCOIS_SHADOW() Jacques Francois Shadow
 * @method static self JALDI() Jaldi
 * @method static self JIM_NIGHTSHADE() Jim Nightshade
 * @method static self JOCKEY_ONE() Jockey One
 * @method static self JOLLY_LODGER() Jolly Lodger
 * @method static self JOMHURIA() Jomhuria
 * @method static self JOSEFIN_SANS() Josefin Sans
 * @method static self JOSEFIN_SLAB() Josefin Slab
 * @method static self JOTI_ONE() Joti One
 * @method static self JUDSON() Judson
 * @method static self JULEE() Julee
 * @method static self JULIUS_SANS_ONE() Julius Sans One
 * @method static self JUNGE() Junge
 * @method static self JURA() Jura
 * @method static self JUST_ANOTHER_HAND() Just Another Hand
 * @method static self JUST_ME_AGAIN() Just Me Again
 * @method static self KADWA() Kadwa
 * @method static self KALAM() Kalam
 * @method static self KAMERON() Kameron
 * @method static self KANIT() Kanit
 * @method static self KANTUMRUY() Kantumruy
 * @method static self KARLA() Karla
 * @method static self KARMA() Karma
 * @method static self KATIBEH() Katibeh
 * @method static self KAUSHAN_SCRIPT() Kaushan Script
 * @method static self KAVIVANAR() Kavivanar
 * @method static self KAVOON() Kavoon
 * @method static self KDAM_THMOR() Kdam Thmor
 * @method static self KEANIA_ONE() Keania One
 * @method static self KELLY_SLAB() Kelly Slab
 * @method static self KENIA() Kenia
 * @method static self KHAND() Khand
 * @method static self KHMER() Khmer
 * @method static self KHULA() Khula
 * @method static self KITE_ONE() Kite One
 * @method static self KNEWAVE() Knewave
 * @method static self KOTTA_ONE() Kotta One
 * @method static self KOULEN() Koulen
 * @method static self KRANKY() Kranky
 * @method static self KREON() Kreon
 * @method static self KRISTI() Kristi
 * @method static self KRONA_ONE() Krona One
 * @method static self KUMAR_ONE() Kumar One
 * @method static self KUMAR_ONE_OUTLINE() Kumar One Outline
 * @method static self KURALE() Kurale
 * @method static self LA_BELLE_AURORE() La Belle Aurore
 * @method static self LAILA() Laila
 * @method static self LAKKI_REDDY() Lakki Reddy
 * @method static self LALEZAR() Lalezar
 * @method static self LANCELOT() Lancelot
 * @method static self LATEEF() Lateef
 * @method static self LATO() Lato
 * @method static self LEAGUE_SCRIPT() League Script
 * @method static self LECKERLI_ONE() Leckerli One
 * @method static self LEDGER() Ledger
 * @method static self LEKTON() Lekton
 * @method static self LEMON() Lemon
 * @method static self LEMONADA() Lemonada
 * @method static self LIBRE_BARCODE_128() Libre Barcode 128
 * @method static self LIBRE_BARCODE_128() Libre Barcode 128
 * @method static self LIBRE_BARCODE_39() Libre Barcode 39
 * @method static self LIBRE_BARCODE_39() Libre Barcode 39
 * @method static self LIBRE_BARCODE_39() Libre Barcode 39
 * @method static self LIBRE_BARCODE_39() Libre Barcode 39
 * @method static self LIBRE_BASKERVILLE() Libre Baskerville
 * @method static self LIBRE_FRANKLIN() Libre Franklin
 * @method static self LIFE_SAVERS() Life Savers
 * @method static self LILITA_ONE() Lilita One
 * @method static self LILY_SCRIPT_ONE() Lily Script One
 * @method static self LIMELIGHT() Limelight
 * @method static self LINDEN_HILL() Linden Hill
 * @method static self LOBSTER() Lobster
 * @method static self LOBSTER_TWO() Lobster Two
 * @method static self LONDRINA_OUTLINE() Londrina Outline
 * @method static self LONDRINA_SHADOW() Londrina Shadow
 * @method static self LONDRINA_SKETCH() Londrina Sketch
 * @method static self LONDRINA_SOLID() Londrina Solid
 * @method static self LORA() Lora
 * @method static self LOVE_YA_LIKE() Love Ya Like
 * @method static self LOVED_BY_THE() Loved by the
 * @method static self LOVERS_QUARREL() Lovers Quarrel
 * @method static self LUCKIEST_GUY() Luckiest Guy
 * @method static self LUSITANA() Lusitana
 * @method static self LUSTRIA() Lustria
 * @method static self MACONDO() Macondo
 * @method static self MACONDO_SWASH_CAPS() Macondo Swash Caps
 * @method static self MADA() Mada
 * @method static self MAGRA() Magra
 * @method static self MAIDEN_ORANGE() Maiden Orange
 * @method static self MAITREE() Maitree
 * @method static self MAKO() Mako
 * @method static self MALLANNA() Mallanna
 * @method static self MANDALI() Mandali
 * @method static self MANUALE() Manuale
 * @method static self MARCELLUS() Marcellus
 * @method static self MARCELLUS_SC() Marcellus SC
 * @method static self MARCK_SCRIPT() Marck Script
 * @method static self MARGARINE() Margarine
 * @method static self MARKO_ONE() Marko One
 * @method static self MARMELAD() Marmelad
 * @method static self MARTEL() Martel
 * @method static self MARTEL_SANS() Martel Sans
 * @method static self MARVEL() Marvel
 * @method static self MATE() Mate
 * @method static self MATE_SC() Mate SC
 * @method static self MAVEN_PRO() Maven Pro
 * @method static self MCLAREN() McLaren
 * @method static self MEDDON() Meddon
 * @method static self MEDIEVALSHARP() MedievalSharp
 * @method static self MEDULA_ONE() Medula One
 * @method static self MEERA_INIMAI() Meera Inimai
 * @method static self MEGRIM() Megrim
 * @method static self MEIE_SCRIPT() Meie Script
 * @method static self MERIENDA() Merienda
 * @method static self MERIENDA_ONE() Merienda One
 * @method static self MERRIWEATHER() Merriweather
 * @method static self MERRIWEATHER_SANS() Merriweather Sans
 * @method static self METAL() Metal
 * @method static self METAL_MANIA() Metal Mania
 * @method static self METAMORPHOUS() Metamorphous
 * @method static self METROPHOBIC() Metrophobic
 * @method static self MICHROMA() Michroma
 * @method static self MILONGA() Milonga
 * @method static self MILTONIAN() Miltonian
 * @method static self MILTONIAN_TATTOO() Miltonian Tattoo
 * @method static self MINIVER() Miniver
 * @method static self MIRIAM_LIBRE() Miriam Libre
 * @method static self MIRZA() Mirza
 * @method static self MISS_FAJARDOSE() Miss Fajardose
 * @method static self MITR() Mitr
 * @method static self MODAK() Modak
 * @method static self MODERN_ANTIQUA() Modern Antiqua
 * @method static self MOGRA() Mogra
 * @method static self MOLENGO() Molengo
 * @method static self MOLLE() Molle
 * @method static self MONDA() Monda
 * @method static self MONOFETT() Monofett
 * @method static self MONOTON() Monoton
 * @method static self MONSIEUR_LA_DOULAISE() Monsieur La Doulaise
 * @method static self MONTAGA() Montaga
 * @method static self MONTEZ() Montez
 * @method static self MONTSERRAT() Montserrat
 * @method static self MONTSERRAT_ALTERNATES() Montserrat Alternates
 * @method static self MONTSERRAT_SUBRAYADA() Montserrat Subrayada
 * @method static self MOUL() Moul
 * @method static self MOULPALI() Moulpali
 * @method static self MOUNTAINS_OF_CHRISTMAS() Mountains of Christmas
 * @method static self MOUSE_MEMOIRS() Mouse Memoirs
 * @method static self MR_BEDFORT() Mr Bedfort
 * @method static self MR_DAFOE() Mr Dafoe
 * @method static self MR_DE_HAVILAND() Mr De Haviland
 * @method static self MRS_SAINT_DELAFIELD() Mrs Saint Delafield
 * @method static self MRS_SHEPPARDS() Mrs Sheppards
 * @method static self MUKTA() Mukta
 * @method static self MUKTA_MAHEE() Mukta Mahee
 * @method static self MUKTA_MALAR() Mukta Malar
 * @method static self MUKTA_VAANI() Mukta Vaani
 * @method static self MULI() Muli
 * @method static self MYSTERY_QUEST() Mystery Quest
 * @method static self NTR() NTR
 * @method static self NEUCHA() Neucha
 * @method static self NEUTON() Neuton
 * @method static self NEW_ROCKER() New Rocker
 * @method static self NEWS_CYCLE() News Cycle
 * @method static self NICONNE() Niconne
 * @method static self NIXIE_ONE() Nixie One
 * @method static self NOBILE() Nobile
 * @method static self NOKORA() Nokora
 * @method static self NORICAN() Norican
 * @method static self NOSIFER() Nosifer
 * @method static self NOTHING_YOU_COULD() Nothing You Could
 * @method static self NOTICIA_TEXT() Noticia Text
 * @method static self NOTO_SANS() Noto Sans
 * @method static self NOTO_SERIF() Noto Serif
 * @method static self NOVA_CUT() Nova Cut
 * @method static self NOVA_FLAT() Nova Flat
 * @method static self NOVA_MONO() Nova Mono
 * @method static self NOVA_OVAL() Nova Oval
 * @method static self NOVA_ROUND() Nova Round
 * @method static self NOVA_SCRIPT() Nova Script
 * @method static self NOVA_SLIM() Nova Slim
 * @method static self NOVA_SQUARE() Nova Square
 * @method static self NUMANS() Numans
 * @method static self NUNITO() Nunito
 * @method static self NUNITO_SANS() Nunito Sans
 * @method static self ODOR_MEAN_CHEY() Odor Mean Chey
 * @method static self OFFSIDE() Offside
 * @method static self OLD_STANDARD_TT() Old Standard TT
 * @method static self OLDENBURG() Oldenburg
 * @method static self OLEO_SCRIPT() Oleo Script
 * @method static self OLEO_SCRIPT_SWASH() Oleo Script Swash
 * @method static self OPEN_SANS() Open Sans
 * @method static self OPEN_SANS_CONDENSED() Open Sans Condensed
 * @method static self ORANIENBAUM() Oranienbaum
 * @method static self ORBITRON() Orbitron
 * @method static self OREGANO() Oregano
 * @method static self ORIENTA() Orienta
 * @method static self ORIGINAL_SURFER() Original Surfer
 * @method static self OSWALD() Oswald
 * @method static self OVER_THE_RAINBOW() Over the Rainbow
 * @method static self OVERLOCK() Overlock
 * @method static self OVERLOCK_SC() Overlock SC
 * @method static self OVERPASS() Overpass
 * @method static self OVERPASS_MONO() Overpass Mono
 * @method static self OVO() Ovo
 * @method static self OXYGEN() Oxygen
 * @method static self OXYGEN_MONO() Oxygen Mono
 * @method static self PT_MONO() PT Mono
 * @method static self PT_SANS() PT Sans
 * @method static self PT_SANS_CAPTION() PT Sans Caption
 * @method static self PT_SANS_NARROW() PT Sans Narrow
 * @method static self PT_SERIF() PT Serif
 * @method static self PT_SERIF_CAPTION() PT Serif Caption
 * @method static self PACIFICO() Pacifico
 * @method static self PADAUK() Padauk
 * @method static self PALANQUIN() Palanquin
 * @method static self PALANQUIN_DARK() Palanquin Dark
 * @method static self PANGOLIN() Pangolin
 * @method static self PAPRIKA() Paprika
 * @method static self PARISIENNE() Parisienne
 * @method static self PASSERO_ONE() Passero One
 * @method static self PASSION_ONE() Passion One
 * @method static self PATHWAY_GOTHIC_ONE() Pathway Gothic One
 * @method static self PATRICK_HAND() Patrick Hand
 * @method static self PATRICK_HAND_SC() Patrick Hand SC
 * @method static self PATTAYA() Pattaya
 * @method static self PATUA_ONE() Patua One
 * @method static self PAVANAM() Pavanam
 * @method static self PAYTONE_ONE() Paytone One
 * @method static self PEDDANA() Peddana
 * @method static self PERALTA() Peralta
 * @method static self PERMANENT_MARKER() Permanent Marker
 * @method static self PETIT_FORMAL_SCRIPT() Petit Formal Script
 * @method static self PETRONA() Petrona
 * @method static self PHILOSOPHER() Philosopher
 * @method static self PIEDRA() Piedra
 * @method static self PINYON_SCRIPT() Pinyon Script
 * @method static self PIRATA_ONE() Pirata One
 * @method static self PLASTER() Plaster
 * @method static self PLAY() Play
 * @method static self PLAYBALL() Playball
 * @method static self PLAYFAIR_DISPLAY() Playfair Display
 * @method static self PLAYFAIR_DISPLAY_SC() Playfair Display SC
 * @method static self PODKOVA() Podkova
 * @method static self POIRET_ONE() Poiret One
 * @method static self POLLER_ONE() Poller One
 * @method static self POLY() Poly
 * @method static self POMPIERE() Pompiere
 * @method static self PONTANO_SANS() Pontano Sans
 * @method static self POPPINS() Poppins
 * @method static self PORT_LLIGAT_SANS() Port Lligat Sans
 * @method static self PORT_LLIGAT_SLAB() Port Lligat Slab
 * @method static self PRAGATI_NARROW() Pragati Narrow
 * @method static self PRATA() Prata
 * @method static self PREAHVIHEAR() Preahvihear
 * @method static self PRESS_START_2P() Press Start 2P
 * @method static self PRIDI() Pridi
 * @method static self PRINCESS_SOFIA() Princess Sofia
 * @method static self PROCIONO() Prociono
 * @method static self PROMPT() Prompt
 * @method static self PROSTO_ONE() Prosto One
 * @method static self PROZA_LIBRE() Proza Libre
 * @method static self PURITAN() Puritan
 * @method static self PURPLE_PURSE() Purple Purse
 * @method static self QUANDO() Quando
 * @method static self QUANTICO() Quantico
 * @method static self QUATTROCENTO() Quattrocento
 * @method static self QUATTROCENTO_SANS() Quattrocento Sans
 * @method static self QUESTRIAL() Questrial
 * @method static self QUICKSAND() Quicksand
 * @method static self QUINTESSENTIAL() Quintessential
 * @method static self QWIGLEY() Qwigley
 * @method static self RACING_SANS_ONE() Racing Sans One
 * @method static self RADLEY() Radley
 * @method static self RAJDHANI() Rajdhani
 * @method static self RAKKAS() Rakkas
 * @method static self RALEWAY() Raleway
 * @method static self RALEWAY_DOTS() Raleway Dots
 * @method static self RAMABHADRA() Ramabhadra
 * @method static self RAMARAJA() Ramaraja
 * @method static self RAMBLA() Rambla
 * @method static self RAMMETTO_ONE() Rammetto One
 * @method static self RANCHERS() Ranchers
 * @method static self RANCHO() Rancho
 * @method static self RANGA() Ranga
 * @method static self RASA() Rasa
 * @method static self RATIONALE() Rationale
 * @method static self RAVI_PRAKASH() Ravi Prakash
 * @method static self REDRESSED() Redressed
 * @method static self REEM_KUFI() Reem Kufi
 * @method static self REENIE_BEANIE() Reenie Beanie
 * @method static self REVALIA() Revalia
 * @method static self RHODIUM_LIBRE() Rhodium Libre
 * @method static self RIBEYE() Ribeye
 * @method static self RIBEYE_MARROW() Ribeye Marrow
 * @method static self RIGHTEOUS() Righteous
 * @method static self RISQUE() Risque
 * @method static self ROBOTO() Roboto
 * @method static self ROBOTO_CONDENSED() Roboto Condensed
 * @method static self ROBOTO_MONO() Roboto Mono
 * @method static self ROBOTO_SLAB() Roboto Slab
 * @method static self ROCHESTER() Rochester
 * @method static self ROCK_SALT() Rock Salt
 * @method static self ROKKITT() Rokkitt
 * @method static self ROMANESCO() Romanesco
 * @method static self ROPA_SANS() Ropa Sans
 * @method static self ROSARIO() Rosario
 * @method static self ROSARIVO() Rosarivo
 * @method static self ROUGE_SCRIPT() Rouge Script
 * @method static self ROZHA_ONE() Rozha One
 * @method static self RUBIK() Rubik
 * @method static self RUBIK_MONO_ONE() Rubik Mono One
 * @method static self RUDA() Ruda
 * @method static self RUFINA() Rufina
 * @method static self RUGE_BOOGIE() Ruge Boogie
 * @method static self RULUKO() Ruluko
 * @method static self RUM_RAISIN() Rum Raisin
 * @method static self RUSLAN_DISPLAY() Ruslan Display
 * @method static self RUSSO_ONE() Russo One
 * @method static self RUTHIE() Ruthie
 * @method static self RYE() Rye
 * @method static self SACRAMENTO() Sacramento
 * @method static self SAHITYA() Sahitya
 * @method static self SAIL() Sail
 * @method static self SAIRA() Saira
 * @method static self SAIRA_CONDENSED() Saira Condensed
 * @method static self SAIRA_EXTRA_CONDENSED() Saira Extra Condensed
 * @method static self SAIRA_SEMI_CONDENSED() Saira Semi Condensed
 * @method static self SALSA() Salsa
 * @method static self SANCHEZ() Sanchez
 * @method static self SANCREEK() Sancreek
 * @method static self SANSITA() Sansita
 * @method static self SARALA() Sarala
 * @method static self SARINA() Sarina
 * @method static self SARPANCH() Sarpanch
 * @method static self SATISFY() Satisfy
 * @method static self SCADA() Scada
 * @method static self SCHEHERAZADE() Scheherazade
 * @method static self SCHOOLBELL() Schoolbell
 * @method static self SCOPE_ONE() Scope One
 * @method static self SEAWEED_SCRIPT() Seaweed Script
 * @method static self SECULAR_ONE() Secular One
 * @method static self SEDGWICK_AVE() Sedgwick Ave
 * @method static self SEDGWICK_AVE_DISPLAY() Sedgwick Ave Display
 * @method static self SEVILLANA() Sevillana
 * @method static self SEYMOUR_ONE() Seymour One
 * @method static self SHADOWS_INTO_LIGHT() Shadows Into Light
 * @method static self SHADOWS_INTO_LIGHT() Shadows Into Light
 * @method static self SHANTI() Shanti
 * @method static self SHARE() Share
 * @method static self SHARE_TECH() Share Tech
 * @method static self SHARE_TECH_MONO() Share Tech Mono
 * @method static self SHOJUMARU() Shojumaru
 * @method static self SHORT_STACK() Short Stack
 * @method static self SHRIKHAND() Shrikhand
 * @method static self SIEMREAP() Siemreap
 * @method static self SIGMAR_ONE() Sigmar One
 * @method static self SIGNIKA() Signika
 * @method static self SIGNIKA_NEGATIVE() Signika Negative
 * @method static self SIMONETTA() Simonetta
 * @method static self SINTONY() Sintony
 * @method static self SIRIN_STENCIL() Sirin Stencil
 * @method static self SIX_CAPS() Six Caps
 * @method static self SKRANJI() Skranji
 * @method static self SLABO_13PX() Slabo 13px
 * @method static self SLABO_27PX() Slabo 27px
 * @method static self SLACKEY() Slackey
 * @method static self SMOKUM() Smokum
 * @method static self SMYTHE() Smythe
 * @method static self SNIGLET() Sniglet
 * @method static self SNIPPET() Snippet
 * @method static self SNOWBURST_ONE() Snowburst One
 * @method static self SOFADI_ONE() Sofadi One
 * @method static self SOFIA() Sofia
 * @method static self SONSIE_ONE() Sonsie One
 * @method static self SORTS_MILL_GOUDY() Sorts Mill Goudy
 * @method static self SOURCE_CODE_PRO() Source Code Pro
 * @method static self SOURCE_SANS_PRO() Source Sans Pro
 * @method static self SOURCE_SERIF_PRO() Source Serif Pro
 * @method static self SPACE_MONO() Space Mono
 * @method static self SPECIAL_ELITE() Special Elite
 * @method static self SPECTRAL() Spectral
 * @method static self SPECTRAL_SC() Spectral SC
 * @method static self SPICY_RICE() Spicy Rice
 * @method static self SPINNAKER() Spinnaker
 * @method static self SPIRAX() Spirax
 * @method static self SQUADA_ONE() Squada One
 * @method static self SREE_KRUSHNADEVARAYA() Sree Krushnadevaraya
 * @method static self SRIRACHA() Sriracha
 * @method static self STALEMATE() Stalemate
 * @method static self STALINIST_ONE() Stalinist One
 * @method static self STARDOS_STENCIL() Stardos Stencil
 * @method static self STINT_ULTRA_CONDENSED() Stint Ultra Condensed
 * @method static self STINT_ULTRA_EXPANDED() Stint Ultra Expanded
 * @method static self STOKE() Stoke
 * @method static self STRAIT() Strait
 * @method static self SUE_ELLEN_FRANCISCO() Sue Ellen Francisco
 * @method static self SUEZ_ONE() Suez One
 * @method static self SUMANA() Sumana
 * @method static self SUNSHINEY() Sunshiney
 * @method static self SUPERMERCADO_ONE() Supermercado One
 * @method static self SURA() Sura
 * @method static self SURANNA() Suranna
 * @method static self SURAVARAM() Suravaram
 * @method static self SUWANNAPHUM() Suwannaphum
 * @method static self SWANKY_AND_MOO() Swanky and Moo
 * @method static self SYNCOPATE() Syncopate
 * @method static self TANGERINE() Tangerine
 * @method static self TAPROM() Taprom
 * @method static self TAURI() Tauri
 * @method static self TAVIRAJ() Taviraj
 * @method static self TEKO() Teko
 * @method static self TELEX() Telex
 * @method static self TENALI_RAMAKRISHNA() Tenali Ramakrishna
 * @method static self TENOR_SANS() Tenor Sans
 * @method static self TEXT_ME_ONE() Text Me One
 * @method static self THE_GIRL_NEXT() The Girl Next
 * @method static self TIENNE() Tienne
 * @method static self TILLANA() Tillana
 * @method static self TIMMANA() Timmana
 * @method static self TINOS() Tinos
 * @method static self TITAN_ONE() Titan One
 * @method static self TITILLIUM_WEB() Titillium Web
 * @method static self TRADE_WINDS() Trade Winds
 * @method static self TRIRONG() Trirong
 * @method static self TROCCHI() Trocchi
 * @method static self TROCHUT() Trochut
 * @method static self TRYKKER() Trykker
 * @method static self TULPEN_ONE() Tulpen One
 * @method static self UBUNTU() Ubuntu
 * @method static self UBUNTU_CONDENSED() Ubuntu Condensed
 * @method static self UBUNTU_MONO() Ubuntu Mono
 * @method static self ULTRA() Ultra
 * @method static self UNCIAL_ANTIQUA() Uncial Antiqua
 * @method static self UNDERDOG() Underdog
 * @method static self UNICA_ONE() Unica One
 * @method static self UNIFRAKTURCOOK() UnifrakturCook
 * @method static self UNIFRAKTURMAGUNTIA() UnifrakturMaguntia
 * @method static self UNKEMPT() Unkempt
 * @method static self UNLOCK() Unlock
 * @method static self UNNA() Unna
 * @method static self VT323() VT323
 * @method static self VAMPIRO_ONE() Vampiro One
 * @method static self VARELA() Varela
 * @method static self VARELA_ROUND() Varela Round
 * @method static self VAST_SHADOW() Vast Shadow
 * @method static self VESPER_LIBRE() Vesper Libre
 * @method static self VIBUR() Vibur
 * @method static self VIDALOKA() Vidaloka
 * @method static self VIGA() Viga
 * @method static self VOCES() Voces
 * @method static self VOLKHOV() Volkhov
 * @method static self VOLLKORN() Vollkorn
 * @method static self VOLLKORN_SC() Vollkorn SC
 * @method static self VOLTAIRE() Voltaire
 * @method static self WAITING_FOR_THE() Waiting for the
 * @method static self WALLPOET() Wallpoet
 * @method static self WALTER_TURNCOAT() Walter Turncoat
 * @method static self WARNES() Warnes
 * @method static self WELLFLEET() Wellfleet
 * @method static self WENDY_ONE() Wendy One
 * @method static self WIRE_ONE() Wire One
 * @method static self WORK_SANS() Work Sans
 * @method static self YANONE_KAFFEESATZ() Yanone Kaffeesatz
 * @method static self YANTRAMANAV() Yantramanav
 * @method static self YATRA_ONE() Yatra One
 * @method static self YELLOWTAIL() Yellowtail
 * @method static self YESEVA_ONE() Yeseva One
 * @method static self YESTERYEAR() Yesteryear
 * @method static self YRSA() Yrsa
 * @method static self ZEYADA() Zeyada
 * @method static self ZILLA_SLAB() Zilla Slab
 * @method static self ZILLA_SLAB_HIGHLIGHT() Zilla Slab Highlight
 */
class GoogleFont extends Enum
{
    /**
     * ABeeZee.
     */
    #[Label('ABeeZee')]
    #[Description('ABeeZee')]
    public const ABEEZEE = 'ABeeZee';

    /**
     * Abel.
     */
    #[Label('Abel')]
    #[Description('Abel')]
    public const ABEL = 'Abel';

    /**
     * Abhaya Libre.
     */
    #[Label('Abhaya Libre')]
    #[Description('Abhaya Libre')]
    public const ABHAYA_LIBRE = 'Abhaya Libre';

    /**
     * Abril Fatface.
     */
    #[Label('Abril Fatface')]
    #[Description('Abril Fatface')]
    public const ABRIL_FATFACE = 'Abril Fatface';

    /**
     * Aclonica.
     */
    #[Label('Aclonica')]
    #[Description('Aclonica')]
    public const ACLONICA = 'Aclonica';

    /**
     * Acme.
     */
    #[Label('Acme')]
    #[Description('Acme')]
    public const ACME = 'Acme';

    /**
     * Actor.
     */
    #[Label('Actor')]
    #[Description('Actor')]
    public const ACTOR = 'Actor';

    /**
     * Adamina.
     */
    #[Label('Adamina')]
    #[Description('Adamina')]
    public const ADAMINA = 'Adamina';

    /**
     * Advent Pro.
     */
    #[Label('Advent Pro')]
    #[Description('Advent Pro')]
    public const ADVENT_PRO = 'Advent Pro';

    /**
     * Aguafina Script.
     */
    #[Label('Aguafina Script')]
    #[Description('Aguafina Script')]
    public const AGUAFINA_SCRIPT = 'Aguafina Script';

    /**
     * Akronim.
     */
    #[Label('Akronim')]
    #[Description('Akronim')]
    public const AKRONIM = 'Akronim';

    /**
     * Aladin.
     */
    #[Label('Aladin')]
    #[Description('Aladin')]
    public const ALADIN = 'Aladin';

    /**
     * Aldrich.
     */
    #[Label('Aldrich')]
    #[Description('Aldrich')]
    public const ALDRICH = 'Aldrich';

    /**
     * Alef.
     */
    #[Label('Alef')]
    #[Description('Alef')]
    public const ALEF = 'Alef';

    /**
     * Alegreya.
     */
    #[Label('Alegreya')]
    #[Description('Alegreya')]
    public const ALEGREYA = 'Alegreya';

    /**
     * Alegreya SC.
     */
    #[Label('Alegreya SC')]
    #[Description('Alegreya SC')]
    public const ALEGREYA_SC = 'Alegreya SC';

    /**
     * Alegreya Sans.
     */
    #[Label('Alegreya Sans')]
    #[Description('Alegreya Sans')]
    public const ALEGREYA_SANS = 'Alegreya Sans';

    /**
     * Alegreya Sans SC.
     */
    #[Label('Alegreya Sans SC')]
    #[Description('Alegreya Sans SC')]
    public const ALEGREYA_SANS_SC = 'Alegreya Sans SC';

    /**
     * Alex Brush.
     */
    #[Label('Alex Brush')]
    #[Description('Alex Brush')]
    public const ALEX_BRUSH = 'Alex Brush';

    /**
     * Alfa Slab One.
     */
    #[Label('Alfa Slab One')]
    #[Description('Alfa Slab One')]
    public const ALFA_SLAB_ONE = 'Alfa Slab One';

    /**
     * Alice.
     */
    #[Label('Alice')]
    #[Description('Alice')]
    public const ALICE = 'Alice';

    /**
     * Alike.
     */
    #[Label('Alike')]
    #[Description('Alike')]
    public const ALIKE = 'Alike';

    /**
     * Alike Angular.
     */
    #[Label('Alike Angular')]
    #[Description('Alike Angular')]
    public const ALIKE_ANGULAR = 'Alike Angular';

    /**
     * Allan.
     */
    #[Label('Allan')]
    #[Description('Allan')]
    public const ALLAN = 'Allan';

    /**
     * Allerta.
     */
    #[Label('Allerta')]
    #[Description('Allerta')]
    public const ALLERTA = 'Allerta';

    /**
     * Allerta Stencil.
     */
    #[Label('Allerta Stencil')]
    #[Description('Allerta Stencil')]
    public const ALLERTA_STENCIL = 'Allerta Stencil';

    /**
     * Allura.
     */
    #[Label('Allura')]
    #[Description('Allura')]
    public const ALLURA = 'Allura';

    /**
     * Almendra.
     */
    #[Label('Almendra')]
    #[Description('Almendra')]
    public const ALMENDRA = 'Almendra';

    /**
     * Almendra Display.
     */
    #[Label('Almendra Display')]
    #[Description('Almendra Display')]
    public const ALMENDRA_DISPLAY = 'Almendra Display';

    /**
     * Almendra SC.
     */
    #[Label('Almendra SC')]
    #[Description('Almendra SC')]
    public const ALMENDRA_SC = 'Almendra SC';

    /**
     * Amarante.
     */
    #[Label('Amarante')]
    #[Description('Amarante')]
    public const AMARANTE = 'Amarante';

    /**
     * Amaranth.
     */
    #[Label('Amaranth')]
    #[Description('Amaranth')]
    public const AMARANTH = 'Amaranth';

    /**
     * Amatic SC.
     */
    #[Label('Amatic SC')]
    #[Description('Amatic SC')]
    public const AMATIC_SC = 'Amatic SC';

    /**
     * Amethysta.
     */
    #[Label('Amethysta')]
    #[Description('Amethysta')]
    public const AMETHYSTA = 'Amethysta';

    /**
     * Amiko.
     */
    #[Label('Amiko')]
    #[Description('Amiko')]
    public const AMIKO = 'Amiko';

    /**
     * Amiri.
     */
    #[Label('Amiri')]
    #[Description('Amiri')]
    public const AMIRI = 'Amiri';

    /**
     * Amita.
     */
    #[Label('Amita')]
    #[Description('Amita')]
    public const AMITA = 'Amita';

    /**
     * Anaheim.
     */
    #[Label('Anaheim')]
    #[Description('Anaheim')]
    public const ANAHEIM = 'Anaheim';

    /**
     * Andada.
     */
    #[Label('Andada')]
    #[Description('Andada')]
    public const ANDADA = 'Andada';

    /**
     * Andika.
     */
    #[Label('Andika')]
    #[Description('Andika')]
    public const ANDIKA = 'Andika';

    /**
     * Angkor.
     */
    #[Label('Angkor')]
    #[Description('Angkor')]
    public const ANGKOR = 'Angkor';

    /**
     * Annie Use Your Telescope.
     */
    #[Label('Annie Use Your Telescope')]
    #[Description('Annie Use Your Telescope')]
    public const ANNIE_USE_YOUR_TELESCOPE = 'Annie Use Your Telescope';

    /**
     * Anonymous Pro.
     */
    #[Label('Anonymous Pro')]
    #[Description('Anonymous Pro')]
    public const ANONYMOUS_PRO = 'Anonymous Pro';

    /**
     * Antic.
     */
    #[Label('Antic')]
    #[Description('Antic')]
    public const ANTIC = 'Antic';

    /**
     * Antic Didone.
     */
    #[Label('Antic Didone')]
    #[Description('Antic Didone')]
    public const ANTIC_DIDONE = 'Antic Didone';

    /**
     * Antic Slab.
     */
    #[Label('Antic Slab')]
    #[Description('Antic Slab')]
    public const ANTIC_SLAB = 'Antic Slab';

    /**
     * Anton.
     */
    #[Label('Anton')]
    #[Description('Anton')]
    public const ANTON = 'Anton';

    /**
     * Arapey.
     */
    #[Label('Arapey')]
    #[Description('Arapey')]
    public const ARAPEY = 'Arapey';

    /**
     * Arbutus.
     */
    #[Label('Arbutus')]
    #[Description('Arbutus')]
    public const ARBUTUS = 'Arbutus';

    /**
     * Arbutus Slab.
     */
    #[Label('Arbutus Slab')]
    #[Description('Arbutus Slab')]
    public const ARBUTUS_SLAB = 'Arbutus Slab';

    /**
     * Architects Daughter.
     */
    #[Label('Architects Daughter')]
    #[Description('Architects Daughter')]
    public const ARCHITECTS_DAUGHTER = 'Architects Daughter';

    /**
     * Archivo.
     */
    #[Label('Archivo')]
    #[Description('Archivo')]
    public const ARCHIVO = 'Archivo';

    /**
     * Archivo Black.
     */
    #[Label('Archivo Black')]
    #[Description('Archivo Black')]
    public const ARCHIVO_BLACK = 'Archivo Black';

    /**
     * Archivo Narrow.
     */
    #[Label('Archivo Narrow')]
    #[Description('Archivo Narrow')]
    public const ARCHIVO_NARROW = 'Archivo Narrow';

    /**
     * Aref Ruqaa.
     */
    #[Label('Aref Ruqaa')]
    #[Description('Aref Ruqaa')]
    public const AREF_RUQAA = 'Aref Ruqaa';

    /**
     * Arima Madurai.
     */
    #[Label('Arima Madurai')]
    #[Description('Arima Madurai')]
    public const ARIMA_MADURAI = 'Arima Madurai';

    /**
     * Arimo.
     */
    #[Label('Arimo')]
    #[Description('Arimo')]
    public const ARIMO = 'Arimo';

    /**
     * Arizonia.
     */
    #[Label('Arizonia')]
    #[Description('Arizonia')]
    public const ARIZONIA = 'Arizonia';

    /**
     * Armata.
     */
    #[Label('Armata')]
    #[Description('Armata')]
    public const ARMATA = 'Armata';

    /**
     * Arsenal.
     */
    #[Label('Arsenal')]
    #[Description('Arsenal')]
    public const ARSENAL = 'Arsenal';

    /**
     * Artifika.
     */
    #[Label('Artifika')]
    #[Description('Artifika')]
    public const ARTIFIKA = 'Artifika';

    /**
     * Arvo.
     */
    #[Label('Arvo')]
    #[Description('Arvo')]
    public const ARVO = 'Arvo';

    /**
     * Arya.
     */
    #[Label('Arya')]
    #[Description('Arya')]
    public const ARYA = 'Arya';

    /**
     * Asap.
     */
    #[Label('Asap')]
    #[Description('Asap')]
    public const ASAP = 'Asap';

    /**
     * Asap Condensed.
     */
    #[Label('Asap Condensed')]
    #[Description('Asap Condensed')]
    public const ASAP_CONDENSED = 'Asap Condensed';

    /**
     * Asar.
     */
    #[Label('Asar')]
    #[Description('Asar')]
    public const ASAR = 'Asar';

    /**
     * Asset.
     */
    #[Label('Asset')]
    #[Description('Asset')]
    public const ASSET = 'Asset';

    /**
     * Assistant.
     */
    #[Label('Assistant')]
    #[Description('Assistant')]
    public const ASSISTANT = 'Assistant';

    /**
     * Astloch.
     */
    #[Label('Astloch')]
    #[Description('Astloch')]
    public const ASTLOCH = 'Astloch';

    /**
     * Asul.
     */
    #[Label('Asul')]
    #[Description('Asul')]
    public const ASUL = 'Asul';

    /**
     * Athiti.
     */
    #[Label('Athiti')]
    #[Description('Athiti')]
    public const ATHITI = 'Athiti';

    /**
     * Atma.
     */
    #[Label('Atma')]
    #[Description('Atma')]
    public const ATMA = 'Atma';

    /**
     * Atomic Age.
     */
    #[Label('Atomic Age')]
    #[Description('Atomic Age')]
    public const ATOMIC_AGE = 'Atomic Age';

    /**
     * Aubrey.
     */
    #[Label('Aubrey')]
    #[Description('Aubrey')]
    public const AUBREY = 'Aubrey';

    /**
     * Audiowide.
     */
    #[Label('Audiowide')]
    #[Description('Audiowide')]
    public const AUDIOWIDE = 'Audiowide';

    /**
     * Autour One.
     */
    #[Label('Autour One')]
    #[Description('Autour One')]
    public const AUTOUR_ONE = 'Autour One';

    /**
     * Average.
     */
    #[Label('Average')]
    #[Description('Average')]
    public const AVERAGE = 'Average';

    /**
     * Average Sans.
     */
    #[Label('Average Sans')]
    #[Description('Average Sans')]
    public const AVERAGE_SANS = 'Average Sans';

    /**
     * Averia Gruesa Libre.
     */
    #[Label('Averia Gruesa Libre')]
    #[Description('Averia Gruesa Libre')]
    public const AVERIA_GRUESA_LIBRE = 'Averia Gruesa Libre';

    /**
     * Averia Libre.
     */
    #[Label('Averia Libre')]
    #[Description('Averia Libre')]
    public const AVERIA_LIBRE = 'Averia Libre';

    /**
     * Averia Sans Libre.
     */
    #[Label('Averia Sans Libre')]
    #[Description('Averia Sans Libre')]
    public const AVERIA_SANS_LIBRE = 'Averia Sans Libre';

    /**
     * Averia Serif Libre.
     */
    #[Label('Averia Serif Libre')]
    #[Description('Averia Serif Libre')]
    public const AVERIA_SERIF_LIBRE = 'Averia Serif Libre';

    /**
     * Bad Script.
     */
    #[Label('Bad Script')]
    #[Description('Bad Script')]
    public const BAD_SCRIPT = 'Bad Script';

    /**
     * Bahiana.
     */
    #[Label('Bahiana')]
    #[Description('Bahiana')]
    public const BAHIANA = 'Bahiana';

    /**
     * Baloo.
     */
    #[Label('Baloo')]
    #[Description('Baloo')]
    public const BALOO = 'Baloo';

    /**
     * Baloo Bhai.
     */
    #[Label('Baloo Bhai')]
    #[Description('Baloo Bhai')]
    public const BALOO_BHAI = 'Baloo Bhai';

    /**
     * Baloo Bhaijaan.
     */
    #[Label('Baloo Bhaijaan')]
    #[Description('Baloo Bhaijaan')]
    public const BALOO_BHAIJAAN = 'Baloo Bhaijaan';

    /**
     * Baloo Bhaina.
     */
    #[Label('Baloo Bhaina')]
    #[Description('Baloo Bhaina')]
    public const BALOO_BHAINA = 'Baloo Bhaina';

    /**
     * Baloo Chettan.
     */
    #[Label('Baloo Chettan')]
    #[Description('Baloo Chettan')]
    public const BALOO_CHETTAN = 'Baloo Chettan';

    /**
     * Baloo Da.
     */
    #[Label('Baloo Da')]
    #[Description('Baloo Da')]
    public const BALOO_DA = 'Baloo Da';

    /**
     * Baloo Paaji.
     */
    #[Label('Baloo Paaji')]
    #[Description('Baloo Paaji')]
    public const BALOO_PAAJI = 'Baloo Paaji';

    /**
     * Baloo Tamma.
     */
    #[Label('Baloo Tamma')]
    #[Description('Baloo Tamma')]
    public const BALOO_TAMMA = 'Baloo Tamma';

    /**
     * Baloo Tammudu.
     */
    #[Label('Baloo Tammudu')]
    #[Description('Baloo Tammudu')]
    public const BALOO_TAMMUDU = 'Baloo Tammudu';

    /**
     * Baloo Thambi.
     */
    #[Label('Baloo Thambi')]
    #[Description('Baloo Thambi')]
    public const BALOO_THAMBI = 'Baloo Thambi';

    /**
     * Balthazar.
     */
    #[Label('Balthazar')]
    #[Description('Balthazar')]
    public const BALTHAZAR = 'Balthazar';

    /**
     * Bangers.
     */
    #[Label('Bangers')]
    #[Description('Bangers')]
    public const BANGERS = 'Bangers';

    /**
     * Barlow.
     */
    #[Label('Barlow')]
    #[Description('Barlow')]
    public const BARLOW = 'Barlow';

    /**
     * Barlow Condensed.
     */
    #[Label('Barlow Condensed')]
    #[Description('Barlow Condensed')]
    public const BARLOW_CONDENSED = 'Barlow Condensed';

    /**
     * Barlow Semi Condensed.
     */
    #[Label('Barlow Semi Condensed')]
    #[Description('Barlow Semi Condensed')]
    public const BARLOW_SEMI_CONDENSED = 'Barlow Semi Condensed';

    /**
     * Barrio.
     */
    #[Label('Barrio')]
    #[Description('Barrio')]
    public const BARRIO = 'Barrio';

    /**
     * Basic.
     */
    #[Label('Basic')]
    #[Description('Basic')]
    public const BASIC = 'Basic';

    /**
     * Battambang.
     */
    #[Label('Battambang')]
    #[Description('Battambang')]
    public const BATTAMBANG = 'Battambang';

    /**
     * Baumans.
     */
    #[Label('Baumans')]
    #[Description('Baumans')]
    public const BAUMANS = 'Baumans';

    /**
     * Bayon.
     */
    #[Label('Bayon')]
    #[Description('Bayon')]
    public const BAYON = 'Bayon';

    /**
     * Belgrano.
     */
    #[Label('Belgrano')]
    #[Description('Belgrano')]
    public const BELGRANO = 'Belgrano';

    /**
     * Bellefair.
     */
    #[Label('Bellefair')]
    #[Description('Bellefair')]
    public const BELLEFAIR = 'Bellefair';

    /**
     * Belleza.
     */
    #[Label('Belleza')]
    #[Description('Belleza')]
    public const BELLEZA = 'Belleza';

    /**
     * BenchNine.
     */
    #[Label('BenchNine')]
    #[Description('BenchNine')]
    public const BENCHNINE = 'BenchNine';

    /**
     * Bentham.
     */
    #[Label('Bentham')]
    #[Description('Bentham')]
    public const BENTHAM = 'Bentham';

    /**
     * Berkshire Swash.
     */
    #[Label('Berkshire Swash')]
    #[Description('Berkshire Swash')]
    public const BERKSHIRE_SWASH = 'Berkshire Swash';

    /**
     * Bevan.
     */
    #[Label('Bevan')]
    #[Description('Bevan')]
    public const BEVAN = 'Bevan';

    /**
     * Bigelow Rules.
     */
    #[Label('Bigelow Rules')]
    #[Description('Bigelow Rules')]
    public const BIGELOW_RULES = 'Bigelow Rules';

    /**
     * Bigshot One.
     */
    #[Label('Bigshot One')]
    #[Description('Bigshot One')]
    public const BIGSHOT_ONE = 'Bigshot One';

    /**
     * Bilbo.
     */
    #[Label('Bilbo')]
    #[Description('Bilbo')]
    public const BILBO = 'Bilbo';

    /**
     * Bilbo Swash Caps.
     */
    #[Label('Bilbo Swash Caps')]
    #[Description('Bilbo Swash Caps')]
    public const BILBO_SWASH_CAPS = 'Bilbo Swash Caps';

    /**
     * BioRhyme.
     */
    #[Label('BioRhyme')]
    #[Description('BioRhyme')]
    public const BIORHYME = 'BioRhyme';

    /**
     * BioRhyme Expanded.
     */
    #[Label('BioRhyme Expanded')]
    #[Description('BioRhyme Expanded')]
    public const BIORHYME_EXPANDED = 'BioRhyme Expanded';

    /**
     * Biryani.
     */
    #[Label('Biryani')]
    #[Description('Biryani')]
    public const BIRYANI = 'Biryani';

    /**
     * Bitter.
     */
    #[Label('Bitter')]
    #[Description('Bitter')]
    public const BITTER = 'Bitter';

    /**
     * Black Ops One.
     */
    #[Label('Black Ops One')]
    #[Description('Black Ops One')]
    public const BLACK_OPS_ONE = 'Black Ops One';

    /**
     * Bokor.
     */
    #[Label('Bokor')]
    #[Description('Bokor')]
    public const BOKOR = 'Bokor';

    /**
     * Bonbon.
     */
    #[Label('Bonbon')]
    #[Description('Bonbon')]
    public const BONBON = 'Bonbon';

    /**
     * Boogaloo.
     */
    #[Label('Boogaloo')]
    #[Description('Boogaloo')]
    public const BOOGALOO = 'Boogaloo';

    /**
     * Bowlby One.
     */
    #[Label('Bowlby One')]
    #[Description('Bowlby One')]
    public const BOWLBY_ONE = 'Bowlby One';

    /**
     * Bowlby One SC.
     */
    #[Label('Bowlby One SC')]
    #[Description('Bowlby One SC')]
    public const BOWLBY_ONE_SC = 'Bowlby One SC';

    /**
     * Brawler.
     */
    #[Label('Brawler')]
    #[Description('Brawler')]
    public const BRAWLER = 'Brawler';

    /**
     * Bree Serif.
     */
    #[Label('Bree Serif')]
    #[Description('Bree Serif')]
    public const BREE_SERIF = 'Bree Serif';

    /**
     * Bubblegum Sans.
     */
    #[Label('Bubblegum Sans')]
    #[Description('Bubblegum Sans')]
    public const BUBBLEGUM_SANS = 'Bubblegum Sans';

    /**
     * Bubbler One.
     */
    #[Label('Bubbler One')]
    #[Description('Bubbler One')]
    public const BUBBLER_ONE = 'Bubbler One';

    /**
     * Buda.
     */
    #[Label('Buda')]
    #[Description('Buda')]
    public const BUDA = 'Buda';

    /**
     * Buenard.
     */
    #[Label('Buenard')]
    #[Description('Buenard')]
    public const BUENARD = 'Buenard';

    /**
     * Bungee.
     */
    #[Label('Bungee')]
    #[Description('Bungee')]
    public const BUNGEE = 'Bungee';

    /**
     * Bungee Hairline.
     */
    #[Label('Bungee Hairline')]
    #[Description('Bungee Hairline')]
    public const BUNGEE_HAIRLINE = 'Bungee Hairline';

    /**
     * Bungee Inline.
     */
    #[Label('Bungee Inline')]
    #[Description('Bungee Inline')]
    public const BUNGEE_INLINE = 'Bungee Inline';

    /**
     * Bungee Outline.
     */
    #[Label('Bungee Outline')]
    #[Description('Bungee Outline')]
    public const BUNGEE_OUTLINE = 'Bungee Outline';

    /**
     * Bungee Shade.
     */
    #[Label('Bungee Shade')]
    #[Description('Bungee Shade')]
    public const BUNGEE_SHADE = 'Bungee Shade';

    /**
     * Butcherman.
     */
    #[Label('Butcherman')]
    #[Description('Butcherman')]
    public const BUTCHERMAN = 'Butcherman';

    /**
     * Butterfly Kids.
     */
    #[Label('Butterfly Kids')]
    #[Description('Butterfly Kids')]
    public const BUTTERFLY_KIDS = 'Butterfly Kids';

    /**
     * Cabin.
     */
    #[Label('Cabin')]
    #[Description('Cabin')]
    public const CABIN = 'Cabin';

    /**
     * Cabin Condensed.
     */
    #[Label('Cabin Condensed')]
    #[Description('Cabin Condensed')]
    public const CABIN_CONDENSED = 'Cabin Condensed';

    /**
     * Cabin Sketch.
     */
    #[Label('Cabin Sketch')]
    #[Description('Cabin Sketch')]
    public const CABIN_SKETCH = 'Cabin Sketch';

    /**
     * Caesar Dressing.
     */
    #[Label('Caesar Dressing')]
    #[Description('Caesar Dressing')]
    public const CAESAR_DRESSING = 'Caesar Dressing';

    /**
     * Cagliostro.
     */
    #[Label('Cagliostro')]
    #[Description('Cagliostro')]
    public const CAGLIOSTRO = 'Cagliostro';

    /**
     * Cairo.
     */
    #[Label('Cairo')]
    #[Description('Cairo')]
    public const CAIRO = 'Cairo';

    /**
     * Calligraffitti.
     */
    #[Label('Calligraffitti')]
    #[Description('Calligraffitti')]
    public const CALLIGRAFFITTI = 'Calligraffitti';

    /**
     * Cambay.
     */
    #[Label('Cambay')]
    #[Description('Cambay')]
    public const CAMBAY = 'Cambay';

    /**
     * Cambo.
     */
    #[Label('Cambo')]
    #[Description('Cambo')]
    public const CAMBO = 'Cambo';

    /**
     * Candal.
     */
    #[Label('Candal')]
    #[Description('Candal')]
    public const CANDAL = 'Candal';

    /**
     * Cantarell.
     */
    #[Label('Cantarell')]
    #[Description('Cantarell')]
    public const CANTARELL = 'Cantarell';

    /**
     * Cantata One.
     */
    #[Label('Cantata One')]
    #[Description('Cantata One')]
    public const CANTATA_ONE = 'Cantata One';

    /**
     * Cantora One.
     */
    #[Label('Cantora One')]
    #[Description('Cantora One')]
    public const CANTORA_ONE = 'Cantora One';

    /**
     * Capriola.
     */
    #[Label('Capriola')]
    #[Description('Capriola')]
    public const CAPRIOLA = 'Capriola';

    /**
     * Cardo.
     */
    #[Label('Cardo')]
    #[Description('Cardo')]
    public const CARDO = 'Cardo';

    /**
     * Carme.
     */
    #[Label('Carme')]
    #[Description('Carme')]
    public const CARME = 'Carme';

    /**
     * Carrois Gothic.
     */
    #[Label('Carrois Gothic')]
    #[Description('Carrois Gothic')]
    public const CARROIS_GOTHIC = 'Carrois Gothic';

    /**
     * Carrois Gothic SC.
     */
    #[Label('Carrois Gothic SC')]
    #[Description('Carrois Gothic SC')]
    public const CARROIS_GOTHIC_SC = 'Carrois Gothic SC';

    /**
     * Carter One.
     */
    #[Label('Carter One')]
    #[Description('Carter One')]
    public const CARTER_ONE = 'Carter One';

    /**
     * Catamaran.
     */
    #[Label('Catamaran')]
    #[Description('Catamaran')]
    public const CATAMARAN = 'Catamaran';

    /**
     * Caudex.
     */
    #[Label('Caudex')]
    #[Description('Caudex')]
    public const CAUDEX = 'Caudex';

    /**
     * Caveat.
     */
    #[Label('Caveat')]
    #[Description('Caveat')]
    public const CAVEAT = 'Caveat';

    /**
     * Caveat Brush.
     */
    #[Label('Caveat Brush')]
    #[Description('Caveat Brush')]
    public const CAVEAT_BRUSH = 'Caveat Brush';

    /**
     * Cedarville Cursive.
     */
    #[Label('Cedarville Cursive')]
    #[Description('Cedarville Cursive')]
    public const CEDARVILLE_CURSIVE = 'Cedarville Cursive';

    /**
     * Ceviche One.
     */
    #[Label('Ceviche One')]
    #[Description('Ceviche One')]
    public const CEVICHE_ONE = 'Ceviche One';

    /**
     * Changa.
     */
    #[Label('Changa')]
    #[Description('Changa')]
    public const CHANGA = 'Changa';

    /**
     * Changa One.
     */
    #[Label('Changa One')]
    #[Description('Changa One')]
    public const CHANGA_ONE = 'Changa One';

    /**
     * Chango.
     */
    #[Label('Chango')]
    #[Description('Chango')]
    public const CHANGO = 'Chango';

    /**
     * Chathura.
     */
    #[Label('Chathura')]
    #[Description('Chathura')]
    public const CHATHURA = 'Chathura';

    /**
     * Chau Philomene One.
     */
    #[Label('Chau Philomene One')]
    #[Description('Chau Philomene One')]
    public const CHAU_PHILOMENE_ONE = 'Chau Philomene One';

    /**
     * Chela One.
     */
    #[Label('Chela One')]
    #[Description('Chela One')]
    public const CHELA_ONE = 'Chela One';

    /**
     * Chelsea Market.
     */
    #[Label('Chelsea Market')]
    #[Description('Chelsea Market')]
    public const CHELSEA_MARKET = 'Chelsea Market';

    /**
     * Chenla.
     */
    #[Label('Chenla')]
    #[Description('Chenla')]
    public const CHENLA = 'Chenla';

    /**
     * Cherry Cream Soda.
     */
    #[Label('Cherry Cream Soda')]
    #[Description('Cherry Cream Soda')]
    public const CHERRY_CREAM_SODA = 'Cherry Cream Soda';

    /**
     * Cherry Swash.
     */
    #[Label('Cherry Swash')]
    #[Description('Cherry Swash')]
    public const CHERRY_SWASH = 'Cherry Swash';

    /**
     * Chewy.
     */
    #[Label('Chewy')]
    #[Description('Chewy')]
    public const CHEWY = 'Chewy';

    /**
     * Chicle.
     */
    #[Label('Chicle')]
    #[Description('Chicle')]
    public const CHICLE = 'Chicle';

    /**
     * Chivo.
     */
    #[Label('Chivo')]
    #[Description('Chivo')]
    public const CHIVO = 'Chivo';

    /**
     * Chonburi.
     */
    #[Label('Chonburi')]
    #[Description('Chonburi')]
    public const CHONBURI = 'Chonburi';

    /**
     * Cinzel.
     */
    #[Label('Cinzel')]
    #[Description('Cinzel')]
    public const CINZEL = 'Cinzel';

    /**
     * Cinzel Decorative.
     */
    #[Label('Cinzel Decorative')]
    #[Description('Cinzel Decorative')]
    public const CINZEL_DECORATIVE = 'Cinzel Decorative';

    /**
     * Clicker Script.
     */
    #[Label('Clicker Script')]
    #[Description('Clicker Script')]
    public const CLICKER_SCRIPT = 'Clicker Script';

    /**
     * Coda.
     */
    #[Label('Coda')]
    #[Description('Coda')]
    public const CODA = 'Coda';

    /**
     * Coda Caption.
     */
    #[Label('Coda Caption')]
    #[Description('Coda Caption')]
    public const CODA_CAPTION = 'Coda Caption';

    /**
     * Codystar.
     */
    #[Label('Codystar')]
    #[Description('Codystar')]
    public const CODYSTAR = 'Codystar';

    /**
     * Coiny.
     */
    #[Label('Coiny')]
    #[Description('Coiny')]
    public const COINY = 'Coiny';

    /**
     * Combo.
     */
    #[Label('Combo')]
    #[Description('Combo')]
    public const COMBO = 'Combo';

    /**
     * Comfortaa.
     */
    #[Label('Comfortaa')]
    #[Description('Comfortaa')]
    public const COMFORTAA = 'Comfortaa';

    /**
     * Coming Soon.
     */
    #[Label('Coming Soon')]
    #[Description('Coming Soon')]
    public const COMING_SOON = 'Coming Soon';

    /**
     * Concert One.
     */
    #[Label('Concert One')]
    #[Description('Concert One')]
    public const CONCERT_ONE = 'Concert One';

    /**
     * Condiment.
     */
    #[Label('Condiment')]
    #[Description('Condiment')]
    public const CONDIMENT = 'Condiment';

    /**
     * Content.
     */
    #[Label('Content')]
    #[Description('Content')]
    public const CONTENT = 'Content';

    /**
     * Contrail One.
     */
    #[Label('Contrail One')]
    #[Description('Contrail One')]
    public const CONTRAIL_ONE = 'Contrail One';

    /**
     * Convergence.
     */
    #[Label('Convergence')]
    #[Description('Convergence')]
    public const CONVERGENCE = 'Convergence';

    /**
     * Cookie.
     */
    #[Label('Cookie')]
    #[Description('Cookie')]
    public const COOKIE = 'Cookie';

    /**
     * Copse.
     */
    #[Label('Copse')]
    #[Description('Copse')]
    public const COPSE = 'Copse';

    /**
     * Corben.
     */
    #[Label('Corben')]
    #[Description('Corben')]
    public const CORBEN = 'Corben';

    /**
     * Cormorant.
     */
    #[Label('Cormorant')]
    #[Description('Cormorant')]
    public const CORMORANT = 'Cormorant';

    /**
     * Cormorant Garamond.
     */
    #[Label('Cormorant Garamond')]
    #[Description('Cormorant Garamond')]
    public const CORMORANT_GARAMOND = 'Cormorant Garamond';

    /**
     * Cormorant Infant.
     */
    #[Label('Cormorant Infant')]
    #[Description('Cormorant Infant')]
    public const CORMORANT_INFANT = 'Cormorant Infant';

    /**
     * Cormorant SC.
     */
    #[Label('Cormorant SC')]
    #[Description('Cormorant SC')]
    public const CORMORANT_SC = 'Cormorant SC';

    /**
     * Cormorant Unicase.
     */
    #[Label('Cormorant Unicase')]
    #[Description('Cormorant Unicase')]
    public const CORMORANT_UNICASE = 'Cormorant Unicase';

    /**
     * Cormorant Upright.
     */
    #[Label('Cormorant Upright')]
    #[Description('Cormorant Upright')]
    public const CORMORANT_UPRIGHT = 'Cormorant Upright';

    /**
     * Courgette.
     */
    #[Label('Courgette')]
    #[Description('Courgette')]
    public const COURGETTE = 'Courgette';

    /**
     * Cousine.
     */
    #[Label('Cousine')]
    #[Description('Cousine')]
    public const COUSINE = 'Cousine';

    /**
     * Coustard.
     */
    #[Label('Coustard')]
    #[Description('Coustard')]
    public const COUSTARD = 'Coustard';

    /**
     * Covered By Your Grace.
     */
    #[Label('Covered By Your Grace')]
    #[Description('Covered By Your Grace')]
    public const COVERED_BY_YOUR_GRACE = 'Covered By Your Grace';

    /**
     * Crafty Girls.
     */
    #[Label('Crafty Girls')]
    #[Description('Crafty Girls')]
    public const CRAFTY_GIRLS = 'Crafty Girls';

    /**
     * Creepster.
     */
    #[Label('Creepster')]
    #[Description('Creepster')]
    public const CREEPSTER = 'Creepster';

    /**
     * Crete Round.
     */
    #[Label('Crete Round')]
    #[Description('Crete Round')]
    public const CRETE_ROUND = 'Crete Round';

    /**
     * Crimson Text.
     */
    #[Label('Crimson Text')]
    #[Description('Crimson Text')]
    public const CRIMSON_TEXT = 'Crimson Text';

    /**
     * Croissant One.
     */
    #[Label('Croissant One')]
    #[Description('Croissant One')]
    public const CROISSANT_ONE = 'Croissant One';

    /**
     * Crushed.
     */
    #[Label('Crushed')]
    #[Description('Crushed')]
    public const CRUSHED = 'Crushed';

    /**
     * Cuprum.
     */
    #[Label('Cuprum')]
    #[Description('Cuprum')]
    public const CUPRUM = 'Cuprum';

    /**
     * Cutive.
     */
    #[Label('Cutive')]
    #[Description('Cutive')]
    public const CUTIVE = 'Cutive';

    /**
     * Cutive Mono.
     */
    #[Label('Cutive Mono')]
    #[Description('Cutive Mono')]
    public const CUTIVE_MONO = 'Cutive Mono';

    /**
     * Damion.
     */
    #[Label('Damion')]
    #[Description('Damion')]
    public const DAMION = 'Damion';

    /**
     * Dancing Script.
     */
    #[Label('Dancing Script')]
    #[Description('Dancing Script')]
    public const DANCING_SCRIPT = 'Dancing Script';

    /**
     * Dangrek.
     */
    #[Label('Dangrek')]
    #[Description('Dangrek')]
    public const DANGREK = 'Dangrek';

    /**
     * David Libre.
     */
    #[Label('David Libre')]
    #[Description('David Libre')]
    public const DAVID_LIBRE = 'David Libre';

    /**
     * Dawning of a New.
     */
    #[Label('Dawning of a New')]
    #[Description('Dawning of a New')]
    public const DAWNING_OF_A_NEW = 'Dawning of a New';

    /**
     * Days One.
     */
    #[Label('Days One')]
    #[Description('Days One')]
    public const DAYS_ONE = 'Days One';

    /**
     * Dekko.
     */
    #[Label('Dekko')]
    #[Description('Dekko')]
    public const DEKKO = 'Dekko';

    /**
     * Delius.
     */
    #[Label('Delius')]
    #[Description('Delius')]
    public const DELIUS = 'Delius';

    /**
     * Delius Swash Caps.
     */
    #[Label('Delius Swash Caps')]
    #[Description('Delius Swash Caps')]
    public const DELIUS_SWASH_CAPS = 'Delius Swash Caps';

    /**
     * Delius Unicase.
     */
    #[Label('Delius Unicase')]
    #[Description('Delius Unicase')]
    public const DELIUS_UNICASE = 'Delius Unicase';

    /**
     * Della Respira.
     */
    #[Label('Della Respira')]
    #[Description('Della Respira')]
    public const DELLA_RESPIRA = 'Della Respira';

    /**
     * Denk One.
     */
    #[Label('Denk One')]
    #[Description('Denk One')]
    public const DENK_ONE = 'Denk One';

    /**
     * Devonshire.
     */
    #[Label('Devonshire')]
    #[Description('Devonshire')]
    public const DEVONSHIRE = 'Devonshire';

    /**
     * Dhurjati.
     */
    #[Label('Dhurjati')]
    #[Description('Dhurjati')]
    public const DHURJATI = 'Dhurjati';

    /**
     * Didact Gothic.
     */
    #[Label('Didact Gothic')]
    #[Description('Didact Gothic')]
    public const DIDACT_GOTHIC = 'Didact Gothic';

    /**
     * Diplomata.
     */
    #[Label('Diplomata')]
    #[Description('Diplomata')]
    public const DIPLOMATA = 'Diplomata';

    /**
     * Diplomata SC.
     */
    #[Label('Diplomata SC')]
    #[Description('Diplomata SC')]
    public const DIPLOMATA_SC = 'Diplomata SC';

    /**
     * Domine.
     */
    #[Label('Domine')]
    #[Description('Domine')]
    public const DOMINE = 'Domine';

    /**
     * Donegal One.
     */
    #[Label('Donegal One')]
    #[Description('Donegal One')]
    public const DONEGAL_ONE = 'Donegal One';

    /**
     * Doppio One.
     */
    #[Label('Doppio One')]
    #[Description('Doppio One')]
    public const DOPPIO_ONE = 'Doppio One';

    /**
     * Dorsa.
     */
    #[Label('Dorsa')]
    #[Description('Dorsa')]
    public const DORSA = 'Dorsa';

    /**
     * Dosis.
     */
    #[Label('Dosis')]
    #[Description('Dosis')]
    public const DOSIS = 'Dosis';

    /**
     * Dr Sugiyama.
     */
    #[Label('Dr Sugiyama')]
    #[Description('Dr Sugiyama')]
    public const DR_SUGIYAMA = 'Dr Sugiyama';

    /**
     * Duru Sans.
     */
    #[Label('Duru Sans')]
    #[Description('Duru Sans')]
    public const DURU_SANS = 'Duru Sans';

    /**
     * Dynalight.
     */
    #[Label('Dynalight')]
    #[Description('Dynalight')]
    public const DYNALIGHT = 'Dynalight';

    /**
     * EB Garamond.
     */
    #[Label('EB Garamond')]
    #[Description('EB Garamond')]
    public const EB_GARAMOND = 'EB Garamond';

    /**
     * Eagle Lake.
     */
    #[Label('Eagle Lake')]
    #[Description('Eagle Lake')]
    public const EAGLE_LAKE = 'Eagle Lake';

    /**
     * Eater.
     */
    #[Label('Eater')]
    #[Description('Eater')]
    public const EATER = 'Eater';

    /**
     * Economica.
     */
    #[Label('Economica')]
    #[Description('Economica')]
    public const ECONOMICA = 'Economica';

    /**
     * Eczar.
     */
    #[Label('Eczar')]
    #[Description('Eczar')]
    public const ECZAR = 'Eczar';

    /**
     * El Messiri.
     */
    #[Label('El Messiri')]
    #[Description('El Messiri')]
    public const EL_MESSIRI = 'El Messiri';

    /**
     * Electrolize.
     */
    #[Label('Electrolize')]
    #[Description('Electrolize')]
    public const ELECTROLIZE = 'Electrolize';

    /**
     * Elsie.
     */
    #[Label('Elsie')]
    #[Description('Elsie')]
    public const ELSIE = 'Elsie';

    /**
     * Elsie Swash Caps.
     */
    #[Label('Elsie Swash Caps')]
    #[Description('Elsie Swash Caps')]
    public const ELSIE_SWASH_CAPS = 'Elsie Swash Caps';

    /**
     * Emblema One.
     */
    #[Label('Emblema One')]
    #[Description('Emblema One')]
    public const EMBLEMA_ONE = 'Emblema One';

    /**
     * Emilys Candy.
     */
    #[Label('Emilys Candy')]
    #[Description('Emilys Candy')]
    public const EMILYS_CANDY = 'Emilys Candy';

    /**
     * Encode Sans.
     */
    #[Label('Encode Sans')]
    #[Description('Encode Sans')]
    public const ENCODE_SANS = 'Encode Sans';

    /**
     * Encode Sans Condensed.
     */
    #[Label('Encode Sans Condensed')]
    #[Description('Encode Sans Condensed')]
    public const ENCODE_SANS_CONDENSED = 'Encode Sans Condensed';

    /**
     * Encode Sans Expanded.
     */
    #[Label('Encode Sans Expanded')]
    #[Description('Encode Sans Expanded')]
    public const ENCODE_SANS_EXPANDED = 'Encode Sans Expanded';

    /**
     * Encode Sans Semi Condensed.
     */
    #[Label('Encode Sans Semi Condensed')]
    #[Description('Encode Sans Semi Condensed')]
    public const ENCODE_SANS_SEMI_CONDENSED = 'Encode Sans Semi Condensed';

    /**
     * Encode Sans Semi Expanded.
     */
    #[Label('Encode Sans Semi Expanded')]
    #[Description('Encode Sans Semi Expanded')]
    public const ENCODE_SANS_SEMI_EXPANDED = 'Encode Sans Semi Expanded';

    /**
     * Engagement.
     */
    #[Label('Engagement')]
    #[Description('Engagement')]
    public const ENGAGEMENT = 'Engagement';

    /**
     * Englebert.
     */
    #[Label('Englebert')]
    #[Description('Englebert')]
    public const ENGLEBERT = 'Englebert';

    /**
     * Enriqueta.
     */
    #[Label('Enriqueta')]
    #[Description('Enriqueta')]
    public const ENRIQUETA = 'Enriqueta';

    /**
     * Erica One.
     */
    #[Label('Erica One')]
    #[Description('Erica One')]
    public const ERICA_ONE = 'Erica One';

    /**
     * Esteban.
     */
    #[Label('Esteban')]
    #[Description('Esteban')]
    public const ESTEBAN = 'Esteban';

    /**
     * Euphoria Script.
     */
    #[Label('Euphoria Script')]
    #[Description('Euphoria Script')]
    public const EUPHORIA_SCRIPT = 'Euphoria Script';

    /**
     * Ewert.
     */
    #[Label('Ewert')]
    #[Description('Ewert')]
    public const EWERT = 'Ewert';

    /**
     * Exo.
     */
    #[Label('Exo')]
    #[Description('Exo')]
    public const EXO = 'Exo';

    /**
     * Exo 2.
     */
    #[Label('Exo 2')]
    #[Description('Exo 2')]
    public const EXO_2 = 'Exo 2';

    /**
     * Expletus Sans.
     */
    #[Label('Expletus Sans')]
    #[Description('Expletus Sans')]
    public const EXPLETUS_SANS = 'Expletus Sans';

    /**
     * Fanwood Text.
     */
    #[Label('Fanwood Text')]
    #[Description('Fanwood Text')]
    public const FANWOOD_TEXT = 'Fanwood Text';

    /**
     * Farsan.
     */
    #[Label('Farsan')]
    #[Description('Farsan')]
    public const FARSAN = 'Farsan';

    /**
     * Fascinate.
     */
    #[Label('Fascinate')]
    #[Description('Fascinate')]
    public const FASCINATE = 'Fascinate';

    /**
     * Fascinate Inline.
     */
    #[Label('Fascinate Inline')]
    #[Description('Fascinate Inline')]
    public const FASCINATE_INLINE = 'Fascinate Inline';

    /**
     * Faster One.
     */
    #[Label('Faster One')]
    #[Description('Faster One')]
    public const FASTER_ONE = 'Faster One';

    /**
     * Fasthand.
     */
    #[Label('Fasthand')]
    #[Description('Fasthand')]
    public const FASTHAND = 'Fasthand';

    /**
     * Fauna One.
     */
    #[Label('Fauna One')]
    #[Description('Fauna One')]
    public const FAUNA_ONE = 'Fauna One';

    /**
     * Faustina.
     */
    #[Label('Faustina')]
    #[Description('Faustina')]
    public const FAUSTINA = 'Faustina';

    /**
     * Federant.
     */
    #[Label('Federant')]
    #[Description('Federant')]
    public const FEDERANT = 'Federant';

    /**
     * Federo.
     */
    #[Label('Federo')]
    #[Description('Federo')]
    public const FEDERO = 'Federo';

    /**
     * Felipa.
     */
    #[Label('Felipa')]
    #[Description('Felipa')]
    public const FELIPA = 'Felipa';

    /**
     * Fenix.
     */
    #[Label('Fenix')]
    #[Description('Fenix')]
    public const FENIX = 'Fenix';

    /**
     * Finger Paint.
     */
    #[Label('Finger Paint')]
    #[Description('Finger Paint')]
    public const FINGER_PAINT = 'Finger Paint';

    /**
     * Fira Mono.
     */
    #[Label('Fira Mono')]
    #[Description('Fira Mono')]
    public const FIRA_MONO = 'Fira Mono';

    /**
     * Fira Sans.
     */
    #[Label('Fira Sans')]
    #[Description('Fira Sans')]
    public const FIRA_SANS = 'Fira Sans';

    /**
     * Fira Sans Condensed.
     */
    #[Label('Fira Sans Condensed')]
    #[Description('Fira Sans Condensed')]
    public const FIRA_SANS_CONDENSED = 'Fira Sans Condensed';

    /**
     * Fira Sans Extra Condensed.
     */
    #[Label('Fira Sans Extra Condensed')]
    #[Description('Fira Sans Extra Condensed')]
    public const FIRA_SANS_EXTRA_CONDENSED = 'Fira Sans Extra Condensed';

    /**
     * Fjalla One.
     */
    #[Label('Fjalla One')]
    #[Description('Fjalla One')]
    public const FJALLA_ONE = 'Fjalla One';

    /**
     * Fjord One.
     */
    #[Label('Fjord One')]
    #[Description('Fjord One')]
    public const FJORD_ONE = 'Fjord One';

    /**
     * Flamenco.
     */
    #[Label('Flamenco')]
    #[Description('Flamenco')]
    public const FLAMENCO = 'Flamenco';

    /**
     * Flavors.
     */
    #[Label('Flavors')]
    #[Description('Flavors')]
    public const FLAVORS = 'Flavors';

    /**
     * Fondamento.
     */
    #[Label('Fondamento')]
    #[Description('Fondamento')]
    public const FONDAMENTO = 'Fondamento';

    /**
     * Fontdiner Swanky.
     */
    #[Label('Fontdiner Swanky')]
    #[Description('Fontdiner Swanky')]
    public const FONTDINER_SWANKY = 'Fontdiner Swanky';

    /**
     * Forum.
     */
    #[Label('Forum')]
    #[Description('Forum')]
    public const FORUM = 'Forum';

    /**
     * Francois One.
     */
    #[Label('Francois One')]
    #[Description('Francois One')]
    public const FRANCOIS_ONE = 'Francois One';

    /**
     * Frank Ruhl Libre.
     */
    #[Label('Frank Ruhl Libre')]
    #[Description('Frank Ruhl Libre')]
    public const FRANK_RUHL_LIBRE = 'Frank Ruhl Libre';

    /**
     * Freckle Face.
     */
    #[Label('Freckle Face')]
    #[Description('Freckle Face')]
    public const FRECKLE_FACE = 'Freckle Face';

    /**
     * Fredericka the Great.
     */
    #[Label('Fredericka the Great')]
    #[Description('Fredericka the Great')]
    public const FREDERICKA_THE_GREAT = 'Fredericka the Great';

    /**
     * Fredoka One.
     */
    #[Label('Fredoka One')]
    #[Description('Fredoka One')]
    public const FREDOKA_ONE = 'Fredoka One';

    /**
     * Freehand.
     */
    #[Label('Freehand')]
    #[Description('Freehand')]
    public const FREEHAND = 'Freehand';

    /**
     * Fresca.
     */
    #[Label('Fresca')]
    #[Description('Fresca')]
    public const FRESCA = 'Fresca';

    /**
     * Frijole.
     */
    #[Label('Frijole')]
    #[Description('Frijole')]
    public const FRIJOLE = 'Frijole';

    /**
     * Fruktur.
     */
    #[Label('Fruktur')]
    #[Description('Fruktur')]
    public const FRUKTUR = 'Fruktur';

    /**
     * Fugaz One.
     */
    #[Label('Fugaz One')]
    #[Description('Fugaz One')]
    public const FUGAZ_ONE = 'Fugaz One';

    /**
     * GFS Didot.
     */
    #[Label('GFS Didot')]
    #[Description('GFS Didot')]
    public const GFS_DIDOT = 'GFS Didot';

    /**
     * GFS Neohellenic.
     */
    #[Label('GFS Neohellenic')]
    #[Description('GFS Neohellenic')]
    public const GFS_NEOHELLENIC = 'GFS Neohellenic';

    /**
     * Gabriela.
     */
    #[Label('Gabriela')]
    #[Description('Gabriela')]
    public const GABRIELA = 'Gabriela';

    /**
     * Gafata.
     */
    #[Label('Gafata')]
    #[Description('Gafata')]
    public const GAFATA = 'Gafata';

    /**
     * Galada.
     */
    #[Label('Galada')]
    #[Description('Galada')]
    public const GALADA = 'Galada';

    /**
     * Galdeano.
     */
    #[Label('Galdeano')]
    #[Description('Galdeano')]
    public const GALDEANO = 'Galdeano';

    /**
     * Galindo.
     */
    #[Label('Galindo')]
    #[Description('Galindo')]
    public const GALINDO = 'Galindo';

    /**
     * Gentium Basic.
     */
    #[Label('Gentium Basic')]
    #[Description('Gentium Basic')]
    public const GENTIUM_BASIC = 'Gentium Basic';

    /**
     * Gentium Book Basic.
     */
    #[Label('Gentium Book Basic')]
    #[Description('Gentium Book Basic')]
    public const GENTIUM_BOOK_BASIC = 'Gentium Book Basic';

    /**
     * Geo.
     */
    #[Label('Geo')]
    #[Description('Geo')]
    public const GEO = 'Geo';

    /**
     * Geostar.
     */
    #[Label('Geostar')]
    #[Description('Geostar')]
    public const GEOSTAR = 'Geostar';

    /**
     * Geostar Fill.
     */
    #[Label('Geostar Fill')]
    #[Description('Geostar Fill')]
    public const GEOSTAR_FILL = 'Geostar Fill';

    /**
     * Germania One.
     */
    #[Label('Germania One')]
    #[Description('Germania One')]
    public const GERMANIA_ONE = 'Germania One';

    /**
     * Gidugu.
     */
    #[Label('Gidugu')]
    #[Description('Gidugu')]
    public const GIDUGU = 'Gidugu';

    /**
     * Gilda Display.
     */
    #[Label('Gilda Display')]
    #[Description('Gilda Display')]
    public const GILDA_DISPLAY = 'Gilda Display';

    /**
     * Give You Glory.
     */
    #[Label('Give You Glory')]
    #[Description('Give You Glory')]
    public const GIVE_YOU_GLORY = 'Give You Glory';

    /**
     * Glass Antiqua.
     */
    #[Label('Glass Antiqua')]
    #[Description('Glass Antiqua')]
    public const GLASS_ANTIQUA = 'Glass Antiqua';

    /**
     * Glegoo.
     */
    #[Label('Glegoo')]
    #[Description('Glegoo')]
    public const GLEGOO = 'Glegoo';

    /**
     * Gloria Hallelujah.
     */
    #[Label('Gloria Hallelujah')]
    #[Description('Gloria Hallelujah')]
    public const GLORIA_HALLELUJAH = 'Gloria Hallelujah';

    /**
     * Goblin One.
     */
    #[Label('Goblin One')]
    #[Description('Goblin One')]
    public const GOBLIN_ONE = 'Goblin One';

    /**
     * Gochi Hand.
     */
    #[Label('Gochi Hand')]
    #[Description('Gochi Hand')]
    public const GOCHI_HAND = 'Gochi Hand';

    /**
     * Gorditas.
     */
    #[Label('Gorditas')]
    #[Description('Gorditas')]
    public const GORDITAS = 'Gorditas';

    /**
     * Goudy Bookletter 1911.
     */
    #[Label('Goudy Bookletter 1911')]
    #[Description('Goudy Bookletter 1911')]
    public const GOUDY_BOOKLETTER_1911 = 'Goudy Bookletter 1911';

    /**
     * Graduate.
     */
    #[Label('Graduate')]
    #[Description('Graduate')]
    public const GRADUATE = 'Graduate';

    /**
     * Grand Hotel.
     */
    #[Label('Grand Hotel')]
    #[Description('Grand Hotel')]
    public const GRAND_HOTEL = 'Grand Hotel';

    /**
     * Gravitas One.
     */
    #[Label('Gravitas One')]
    #[Description('Gravitas One')]
    public const GRAVITAS_ONE = 'Gravitas One';

    /**
     * Great Vibes.
     */
    #[Label('Great Vibes')]
    #[Description('Great Vibes')]
    public const GREAT_VIBES = 'Great Vibes';

    /**
     * Griffy.
     */
    #[Label('Griffy')]
    #[Description('Griffy')]
    public const GRIFFY = 'Griffy';

    /**
     * Gruppo.
     */
    #[Label('Gruppo')]
    #[Description('Gruppo')]
    public const GRUPPO = 'Gruppo';

    /**
     * Gudea.
     */
    #[Label('Gudea')]
    #[Description('Gudea')]
    public const GUDEA = 'Gudea';

    /**
     * Gurajada.
     */
    #[Label('Gurajada')]
    #[Description('Gurajada')]
    public const GURAJADA = 'Gurajada';

    /**
     * Habibi.
     */
    #[Label('Habibi')]
    #[Description('Habibi')]
    public const HABIBI = 'Habibi';

    /**
     * Halant.
     */
    #[Label('Halant')]
    #[Description('Halant')]
    public const HALANT = 'Halant';

    /**
     * Hammersmith One.
     */
    #[Label('Hammersmith One')]
    #[Description('Hammersmith One')]
    public const HAMMERSMITH_ONE = 'Hammersmith One';

    /**
     * Hanalei.
     */
    #[Label('Hanalei')]
    #[Description('Hanalei')]
    public const HANALEI = 'Hanalei';

    /**
     * Hanalei Fill.
     */
    #[Label('Hanalei Fill')]
    #[Description('Hanalei Fill')]
    public const HANALEI_FILL = 'Hanalei Fill';

    /**
     * Handlee.
     */
    #[Label('Handlee')]
    #[Description('Handlee')]
    public const HANDLEE = 'Handlee';

    /**
     * Hanuman.
     */
    #[Label('Hanuman')]
    #[Description('Hanuman')]
    public const HANUMAN = 'Hanuman';

    /**
     * Happy Monkey.
     */
    #[Label('Happy Monkey')]
    #[Description('Happy Monkey')]
    public const HAPPY_MONKEY = 'Happy Monkey';

    /**
     * Harmattan.
     */
    #[Label('Harmattan')]
    #[Description('Harmattan')]
    public const HARMATTAN = 'Harmattan';

    /**
     * Headland One.
     */
    #[Label('Headland One')]
    #[Description('Headland One')]
    public const HEADLAND_ONE = 'Headland One';

    /**
     * Heebo.
     */
    #[Label('Heebo')]
    #[Description('Heebo')]
    public const HEEBO = 'Heebo';

    /**
     * Henny Penny.
     */
    #[Label('Henny Penny')]
    #[Description('Henny Penny')]
    public const HENNY_PENNY = 'Henny Penny';

    /**
     * Herr Von Muellerhoff.
     */
    #[Label('Herr Von Muellerhoff')]
    #[Description('Herr Von Muellerhoff')]
    public const HERR_VON_MUELLERHOFF = 'Herr Von Muellerhoff';

    /**
     * Hind.
     */
    #[Label('Hind')]
    #[Description('Hind')]
    public const HIND = 'Hind';

    /**
     * Hind Guntur.
     */
    #[Label('Hind Guntur')]
    #[Description('Hind Guntur')]
    public const HIND_GUNTUR = 'Hind Guntur';

    /**
     * Hind Madurai.
     */
    #[Label('Hind Madurai')]
    #[Description('Hind Madurai')]
    public const HIND_MADURAI = 'Hind Madurai';

    /**
     * Hind Siliguri.
     */
    #[Label('Hind Siliguri')]
    #[Description('Hind Siliguri')]
    public const HIND_SILIGURI = 'Hind Siliguri';

    /**
     * Hind Vadodara.
     */
    #[Label('Hind Vadodara')]
    #[Description('Hind Vadodara')]
    public const HIND_VADODARA = 'Hind Vadodara';

    /**
     * Holtwood One SC.
     */
    #[Label('Holtwood One SC')]
    #[Description('Holtwood One SC')]
    public const HOLTWOOD_ONE_SC = 'Holtwood One SC';

    /**
     * Homemade Apple.
     */
    #[Label('Homemade Apple')]
    #[Description('Homemade Apple')]
    public const HOMEMADE_APPLE = 'Homemade Apple';

    /**
     * Homenaje.
     */
    #[Label('Homenaje')]
    #[Description('Homenaje')]
    public const HOMENAJE = 'Homenaje';

    /**
     * IM Fell DW Pica.
     */
    #[Label('IM Fell DW Pica')]
    #[Description('IM Fell DW Pica')]
    public const IM_FELL_DW_PICA = 'IM Fell DW Pica';

    /**
     * IM Fell Double Pica.
     */
    #[Label('IM Fell Double Pica')]
    #[Description('IM Fell Double Pica')]
    public const IM_FELL_DOUBLE_PICA = 'IM Fell Double Pica';

    /**
     * IM Fell English.
     */
    #[Label('IM Fell English')]
    #[Description('IM Fell English')]
    public const IM_FELL_ENGLISH = 'IM Fell English';

    /**
     * IM Fell English SC.
     */
    #[Label('IM Fell English SC')]
    #[Description('IM Fell English SC')]
    public const IM_FELL_ENGLISH_SC = 'IM Fell English SC';

    /**
     * IM Fell French Canon.
     */
    #[Label('IM Fell French Canon')]
    #[Description('IM Fell French Canon')]
    public const IM_FELL_FRENCH_CANON = 'IM Fell French Canon';

    /**
     * IM Fell Great Primer.
     */
    #[Label('IM Fell Great Primer')]
    #[Description('IM Fell Great Primer')]
    public const IM_FELL_GREAT_PRIMER = 'IM Fell Great Primer';

    /**
     * Iceberg.
     */
    #[Label('Iceberg')]
    #[Description('Iceberg')]
    public const ICEBERG = 'Iceberg';

    /**
     * Iceland.
     */
    #[Label('Iceland')]
    #[Description('Iceland')]
    public const ICELAND = 'Iceland';

    /**
     * Imprima.
     */
    #[Label('Imprima')]
    #[Description('Imprima')]
    public const IMPRIMA = 'Imprima';

    /**
     * Inconsolata.
     */
    #[Label('Inconsolata')]
    #[Description('Inconsolata')]
    public const INCONSOLATA = 'Inconsolata';

    /**
     * Inder.
     */
    #[Label('Inder')]
    #[Description('Inder')]
    public const INDER = 'Inder';

    /**
     * Indie Flower.
     */
    #[Label('Indie Flower')]
    #[Description('Indie Flower')]
    public const INDIE_FLOWER = 'Indie Flower';

    /**
     * Inika.
     */
    #[Label('Inika')]
    #[Description('Inika')]
    public const INIKA = 'Inika';

    /**
     * Inknut Antiqua.
     */
    #[Label('Inknut Antiqua')]
    #[Description('Inknut Antiqua')]
    public const INKNUT_ANTIQUA = 'Inknut Antiqua';

    /**
     * Irish Grover.
     */
    #[Label('Irish Grover')]
    #[Description('Irish Grover')]
    public const IRISH_GROVER = 'Irish Grover';

    /**
     * Istok Web.
     */
    #[Label('Istok Web')]
    #[Description('Istok Web')]
    public const ISTOK_WEB = 'Istok Web';

    /**
     * Italiana.
     */
    #[Label('Italiana')]
    #[Description('Italiana')]
    public const ITALIANA = 'Italiana';

    /**
     * Italianno.
     */
    #[Label('Italianno')]
    #[Description('Italianno')]
    public const ITALIANNO = 'Italianno';

    /**
     * Itim.
     */
    #[Label('Itim')]
    #[Description('Itim')]
    public const ITIM = 'Itim';

    /**
     * Jacques Francois.
     */
    #[Label('Jacques Francois')]
    #[Description('Jacques Francois')]
    public const JACQUES_FRANCOIS = 'Jacques Francois';

    /**
     * Jacques Francois Shadow.
     */
    #[Label('Jacques Francois Shadow')]
    #[Description('Jacques Francois Shadow')]
    public const JACQUES_FRANCOIS_SHADOW = 'Jacques Francois Shadow';

    /**
     * Jaldi.
     */
    #[Label('Jaldi')]
    #[Description('Jaldi')]
    public const JALDI = 'Jaldi';

    /**
     * Jim Nightshade.
     */
    #[Label('Jim Nightshade')]
    #[Description('Jim Nightshade')]
    public const JIM_NIGHTSHADE = 'Jim Nightshade';

    /**
     * Jockey One.
     */
    #[Label('Jockey One')]
    #[Description('Jockey One')]
    public const JOCKEY_ONE = 'Jockey One';

    /**
     * Jolly Lodger.
     */
    #[Label('Jolly Lodger')]
    #[Description('Jolly Lodger')]
    public const JOLLY_LODGER = 'Jolly Lodger';

    /**
     * Jomhuria.
     */
    #[Label('Jomhuria')]
    #[Description('Jomhuria')]
    public const JOMHURIA = 'Jomhuria';

    /**
     * Josefin Sans.
     */
    #[Label('Josefin Sans')]
    #[Description('Josefin Sans')]
    public const JOSEFIN_SANS = 'Josefin Sans';

    /**
     * Josefin Slab.
     */
    #[Label('Josefin Slab')]
    #[Description('Josefin Slab')]
    public const JOSEFIN_SLAB = 'Josefin Slab';

    /**
     * Joti One.
     */
    #[Label('Joti One')]
    #[Description('Joti One')]
    public const JOTI_ONE = 'Joti One';

    /**
     * Judson.
     */
    #[Label('Judson')]
    #[Description('Judson')]
    public const JUDSON = 'Judson';

    /**
     * Julee.
     */
    #[Label('Julee')]
    #[Description('Julee')]
    public const JULEE = 'Julee';

    /**
     * Julius Sans One.
     */
    #[Label('Julius Sans One')]
    #[Description('Julius Sans One')]
    public const JULIUS_SANS_ONE = 'Julius Sans One';

    /**
     * Junge.
     */
    #[Label('Junge')]
    #[Description('Junge')]
    public const JUNGE = 'Junge';

    /**
     * Jura.
     */
    #[Label('Jura')]
    #[Description('Jura')]
    public const JURA = 'Jura';

    /**
     * Just Another Hand.
     */
    #[Label('Just Another Hand')]
    #[Description('Just Another Hand')]
    public const JUST_ANOTHER_HAND = 'Just Another Hand';

    /**
     * Just Me Again Down.
     */
    #[Label('Just Me Again Down')]
    #[Description('Just Me Again Down')]
    public const JUST_ME_AGAIN_DOWN = 'Just Me Again Down';

    /**
     * Kadwa.
     */
    #[Label('Kadwa')]
    #[Description('Kadwa')]
    public const KADWA = 'Kadwa';

    /**
     * Kalam.
     */
    #[Label('Kalam')]
    #[Description('Kalam')]
    public const KALAM = 'Kalam';

    /**
     * Kameron.
     */
    #[Label('Kameron')]
    #[Description('Kameron')]
    public const KAMERON = 'Kameron';

    /**
     * Kanit.
     */
    #[Label('Kanit')]
    #[Description('Kanit')]
    public const KANIT = 'Kanit';

    /**
     * Kantumruy.
     */
    #[Label('Kantumruy')]
    #[Description('Kantumruy')]
    public const KANTUMRUY = 'Kantumruy';

    /**
     * Karla.
     */
    #[Label('Karla')]
    #[Description('Karla')]
    public const KARLA = 'Karla';

    /**
     * Karma.
     */
    #[Label('Karma')]
    #[Description('Karma')]
    public const KARMA = 'Karma';

    /**
     * Katibeh.
     */
    #[Label('Katibeh')]
    #[Description('Katibeh')]
    public const KATIBEH = 'Katibeh';

    /**
     * Kaushan Script.
     */
    #[Label('Kaushan Script')]
    #[Description('Kaushan Script')]
    public const KAUSHAN_SCRIPT = 'Kaushan Script';

    /**
     * Kavivanar.
     */
    #[Label('Kavivanar')]
    #[Description('Kavivanar')]
    public const KAVIVANAR = 'Kavivanar';

    /**
     * Kavoon.
     */
    #[Label('Kavoon')]
    #[Description('Kavoon')]
    public const KAVOON = 'Kavoon';

    /**
     * Kdam Thmor.
     */
    #[Label('Kdam Thmor')]
    #[Description('Kdam Thmor')]
    public const KDAM_THMOR = 'Kdam Thmor';

    /**
     * Keania One.
     */
    #[Label('Keania One')]
    #[Description('Keania One')]
    public const KEANIA_ONE = 'Keania One';

    /**
     * Kelly Slab.
     */
    #[Label('Kelly Slab')]
    #[Description('Kelly Slab')]
    public const KELLY_SLAB = 'Kelly Slab';

    /**
     * Kenia.
     */
    #[Label('Kenia')]
    #[Description('Kenia')]
    public const KENIA = 'Kenia';

    /**
     * Khand.
     */
    #[Label('Khand')]
    #[Description('Khand')]
    public const KHAND = 'Khand';

    /**
     * Khmer.
     */
    #[Label('Khmer')]
    #[Description('Khmer')]
    public const KHMER = 'Khmer';

    /**
     * Khula.
     */
    #[Label('Khula')]
    #[Description('Khula')]
    public const KHULA = 'Khula';

    /**
     * Kite One.
     */
    #[Label('Kite One')]
    #[Description('Kite One')]
    public const KITE_ONE = 'Kite One';

    /**
     * Knewave.
     */
    #[Label('Knewave')]
    #[Description('Knewave')]
    public const KNEWAVE = 'Knewave';

    /**
     * Kotta One.
     */
    #[Label('Kotta One')]
    #[Description('Kotta One')]
    public const KOTTA_ONE = 'Kotta One';

    /**
     * Koulen.
     */
    #[Label('Koulen')]
    #[Description('Koulen')]
    public const KOULEN = 'Koulen';

    /**
     * Kranky.
     */
    #[Label('Kranky')]
    #[Description('Kranky')]
    public const KRANKY = 'Kranky';

    /**
     * Kreon.
     */
    #[Label('Kreon')]
    #[Description('Kreon')]
    public const KREON = 'Kreon';

    /**
     * Kristi.
     */
    #[Label('Kristi')]
    #[Description('Kristi')]
    public const KRISTI = 'Kristi';

    /**
     * Krona One.
     */
    #[Label('Krona One')]
    #[Description('Krona One')]
    public const KRONA_ONE = 'Krona One';

    /**
     * Kumar One.
     */
    #[Label('Kumar One')]
    #[Description('Kumar One')]
    public const KUMAR_ONE = 'Kumar One';

    /**
     * Kumar One Outline.
     */
    #[Label('Kumar One Outline')]
    #[Description('Kumar One Outline')]
    public const KUMAR_ONE_OUTLINE = 'Kumar One Outline';

    /**
     * Kurale.
     */
    #[Label('Kurale')]
    #[Description('Kurale')]
    public const KURALE = 'Kurale';

    /**
     * La Belle Aurore.
     */
    #[Label('La Belle Aurore')]
    #[Description('La Belle Aurore')]
    public const LA_BELLE_AURORE = 'La Belle Aurore';

    /**
     * Laila.
     */
    #[Label('Laila')]
    #[Description('Laila')]
    public const LAILA = 'Laila';

    /**
     * Lakki Reddy.
     */
    #[Label('Lakki Reddy')]
    #[Description('Lakki Reddy')]
    public const LAKKI_REDDY = 'Lakki Reddy';

    /**
     * Lalezar.
     */
    #[Label('Lalezar')]
    #[Description('Lalezar')]
    public const LALEZAR = 'Lalezar';

    /**
     * Lancelot.
     */
    #[Label('Lancelot')]
    #[Description('Lancelot')]
    public const LANCELOT = 'Lancelot';

    /**
     * Lateef.
     */
    #[Label('Lateef')]
    #[Description('Lateef')]
    public const LATEEF = 'Lateef';

    /**
     * Lato.
     */
    #[Label('Lato')]
    #[Description('Lato')]
    public const LATO = 'Lato';

    /**
     * League Script.
     */
    #[Label('League Script')]
    #[Description('League Script')]
    public const LEAGUE_SCRIPT = 'League Script';

    /**
     * Leckerli One.
     */
    #[Label('Leckerli One')]
    #[Description('Leckerli One')]
    public const LECKERLI_ONE = 'Leckerli One';

    /**
     * Ledger.
     */
    #[Label('Ledger')]
    #[Description('Ledger')]
    public const LEDGER = 'Ledger';

    /**
     * Lekton.
     */
    #[Label('Lekton')]
    #[Description('Lekton')]
    public const LEKTON = 'Lekton';

    /**
     * Lemon.
     */
    #[Label('Lemon')]
    #[Description('Lemon')]
    public const LEMON = 'Lemon';

    /**
     * Lemonada.
     */
    #[Label('Lemonada')]
    #[Description('Lemonada')]
    public const LEMONADA = 'Lemonada';

    /**
     * Libre Barcode 128.
     */
    #[Label('Libre Barcode 128')]
    #[Description('Libre Barcode 128')]
    public const LIBRE_BARCODE_128 = 'Libre Barcode 128';

    /**
     * Libre Barcode 128 Text.
     */
    #[Label('Libre Barcode 128 Text')]
    #[Description('Libre Barcode 128 Text')]
    public const LIBRE_BARCODE_128_TEXT = 'Libre Barcode 128 Text';

    /**
     * Libre Barcode 39.
     */
    #[Label('Libre Barcode 39')]
    #[Description('Libre Barcode 39')]
    public const LIBRE_BARCODE_39 = 'Libre Barcode 39';

    /**
     * Libre Barcode 39 Extended.
     */
    #[Label('Libre Barcode 39 Extended')]
    #[Description('Libre Barcode 39 Extended')]
    public const LIBRE_BARCODE_39_EXTENDED = 'Libre Barcode 39 Extended';

    /**
     * Libre Barcode 39 Text.
     */
    #[Label('Libre Barcode 39 Text')]
    #[Description('Libre Barcode 39 Text')]
    public const LIBRE_BARCODE_39_TEXT = 'Libre Barcode 39 Text';

    /**
     * Libre Baskerville.
     */
    #[Label('Libre Baskerville')]
    #[Description('Libre Baskerville')]
    public const LIBRE_BASKERVILLE = 'Libre Baskerville';

    /**
     * Libre Franklin.
     */
    #[Label('Libre Franklin')]
    #[Description('Libre Franklin')]
    public const LIBRE_FRANKLIN = 'Libre Franklin';

    /**
     * Life Savers.
     */
    #[Label('Life Savers')]
    #[Description('Life Savers')]
    public const LIFE_SAVERS = 'Life Savers';

    /**
     * Lilita One.
     */
    #[Label('Lilita One')]
    #[Description('Lilita One')]
    public const LILITA_ONE = 'Lilita One';

    /**
     * Lily Script One.
     */
    #[Label('Lily Script One')]
    #[Description('Lily Script One')]
    public const LILY_SCRIPT_ONE = 'Lily Script One';

    /**
     * Limelight.
     */
    #[Label('Limelight')]
    #[Description('Limelight')]
    public const LIMELIGHT = 'Limelight';

    /**
     * Linden Hill.
     */
    #[Label('Linden Hill')]
    #[Description('Linden Hill')]
    public const LINDEN_HILL = 'Linden Hill';

    /**
     * Lobster.
     */
    #[Label('Lobster')]
    #[Description('Lobster')]
    public const LOBSTER = 'Lobster';

    /**
     * Lobster Two.
     */
    #[Label('Lobster Two')]
    #[Description('Lobster Two')]
    public const LOBSTER_TWO = 'Lobster Two';

    /**
     * Londrina Outline.
     */
    #[Label('Londrina Outline')]
    #[Description('Londrina Outline')]
    public const LONDRINA_OUTLINE = 'Londrina Outline';

    /**
     * Londrina Shadow.
     */
    #[Label('Londrina Shadow')]
    #[Description('Londrina Shadow')]
    public const LONDRINA_SHADOW = 'Londrina Shadow';

    /**
     * Londrina Sketch.
     */
    #[Label('Londrina Sketch')]
    #[Description('Londrina Sketch')]
    public const LONDRINA_SKETCH = 'Londrina Sketch';

    /**
     * Londrina Solid.
     */
    #[Label('Londrina Solid')]
    #[Description('Londrina Solid')]
    public const LONDRINA_SOLID = 'Londrina Solid';

    /**
     * Lora.
     */
    #[Label('Lora')]
    #[Description('Lora')]
    public const LORA = 'Lora';

    /**
     * Love Ya Like A.
     */
    #[Label('Love Ya Like A')]
    #[Description('Love Ya Like A')]
    public const LOVE_YA_LIKE_A = 'Love Ya Like A';

    /**
     * Loved by the King.
     */
    #[Label('Loved by the King')]
    #[Description('Loved by the King')]
    public const LOVED_BY_THE_KING = 'Loved by the King';

    /**
     * Lovers Quarrel.
     */
    #[Label('Lovers Quarrel')]
    #[Description('Lovers Quarrel')]
    public const LOVERS_QUARREL = 'Lovers Quarrel';

    /**
     * Luckiest Guy.
     */
    #[Label('Luckiest Guy')]
    #[Description('Luckiest Guy')]
    public const LUCKIEST_GUY = 'Luckiest Guy';

    /**
     * Lusitana.
     */
    #[Label('Lusitana')]
    #[Description('Lusitana')]
    public const LUSITANA = 'Lusitana';

    /**
     * Lustria.
     */
    #[Label('Lustria')]
    #[Description('Lustria')]
    public const LUSTRIA = 'Lustria';

    /**
     * Macondo.
     */
    #[Label('Macondo')]
    #[Description('Macondo')]
    public const MACONDO = 'Macondo';

    /**
     * Macondo Swash Caps.
     */
    #[Label('Macondo Swash Caps')]
    #[Description('Macondo Swash Caps')]
    public const MACONDO_SWASH_CAPS = 'Macondo Swash Caps';

    /**
     * Mada.
     */
    #[Label('Mada')]
    #[Description('Mada')]
    public const MADA = 'Mada';

    /**
     * Magra.
     */
    #[Label('Magra')]
    #[Description('Magra')]
    public const MAGRA = 'Magra';

    /**
     * Maiden Orange.
     */
    #[Label('Maiden Orange')]
    #[Description('Maiden Orange')]
    public const MAIDEN_ORANGE = 'Maiden Orange';

    /**
     * Maitree.
     */
    #[Label('Maitree')]
    #[Description('Maitree')]
    public const MAITREE = 'Maitree';

    /**
     * Mako.
     */
    #[Label('Mako')]
    #[Description('Mako')]
    public const MAKO = 'Mako';

    /**
     * Mallanna.
     */
    #[Label('Mallanna')]
    #[Description('Mallanna')]
    public const MALLANNA = 'Mallanna';

    /**
     * Mandali.
     */
    #[Label('Mandali')]
    #[Description('Mandali')]
    public const MANDALI = 'Mandali';

    /**
     * Manuale.
     */
    #[Label('Manuale')]
    #[Description('Manuale')]
    public const MANUALE = 'Manuale';

    /**
     * Marcellus.
     */
    #[Label('Marcellus')]
    #[Description('Marcellus')]
    public const MARCELLUS = 'Marcellus';

    /**
     * Marcellus SC.
     */
    #[Label('Marcellus SC')]
    #[Description('Marcellus SC')]
    public const MARCELLUS_SC = 'Marcellus SC';

    /**
     * Marck Script.
     */
    #[Label('Marck Script')]
    #[Description('Marck Script')]
    public const MARCK_SCRIPT = 'Marck Script';

    /**
     * Margarine.
     */
    #[Label('Margarine')]
    #[Description('Margarine')]
    public const MARGARINE = 'Margarine';

    /**
     * Marko One.
     */
    #[Label('Marko One')]
    #[Description('Marko One')]
    public const MARKO_ONE = 'Marko One';

    /**
     * Marmelad.
     */
    #[Label('Marmelad')]
    #[Description('Marmelad')]
    public const MARMELAD = 'Marmelad';

    /**
     * Martel.
     */
    #[Label('Martel')]
    #[Description('Martel')]
    public const MARTEL = 'Martel';

    /**
     * Martel Sans.
     */
    #[Label('Martel Sans')]
    #[Description('Martel Sans')]
    public const MARTEL_SANS = 'Martel Sans';

    /**
     * Marvel.
     */
    #[Label('Marvel')]
    #[Description('Marvel')]
    public const MARVEL = 'Marvel';

    /**
     * Mate.
     */
    #[Label('Mate')]
    #[Description('Mate')]
    public const MATE = 'Mate';

    /**
     * Mate SC.
     */
    #[Label('Mate SC')]
    #[Description('Mate SC')]
    public const MATE_SC = 'Mate SC';

    /**
     * Maven Pro.
     */
    #[Label('Maven Pro')]
    #[Description('Maven Pro')]
    public const MAVEN_PRO = 'Maven Pro';

    /**
     * McLaren.
     */
    #[Label('McLaren')]
    #[Description('McLaren')]
    public const MCLAREN = 'McLaren';

    /**
     * Meddon.
     */
    #[Label('Meddon')]
    #[Description('Meddon')]
    public const MEDDON = 'Meddon';

    /**
     * MedievalSharp.
     */
    #[Label('MedievalSharp')]
    #[Description('MedievalSharp')]
    public const MEDIEVALSHARP = 'MedievalSharp';

    /**
     * Medula One.
     */
    #[Label('Medula One')]
    #[Description('Medula One')]
    public const MEDULA_ONE = 'Medula One';

    /**
     * Meera Inimai.
     */
    #[Label('Meera Inimai')]
    #[Description('Meera Inimai')]
    public const MEERA_INIMAI = 'Meera Inimai';

    /**
     * Megrim.
     */
    #[Label('Megrim')]
    #[Description('Megrim')]
    public const MEGRIM = 'Megrim';

    /**
     * Meie Script.
     */
    #[Label('Meie Script')]
    #[Description('Meie Script')]
    public const MEIE_SCRIPT = 'Meie Script';

    /**
     * Merienda.
     */
    #[Label('Merienda')]
    #[Description('Merienda')]
    public const MERIENDA = 'Merienda';

    /**
     * Merienda One.
     */
    #[Label('Merienda One')]
    #[Description('Merienda One')]
    public const MERIENDA_ONE = 'Merienda One';

    /**
     * Merriweather.
     */
    #[Label('Merriweather')]
    #[Description('Merriweather')]
    public const MERRIWEATHER = 'Merriweather';

    /**
     * Merriweather Sans.
     */
    #[Label('Merriweather Sans')]
    #[Description('Merriweather Sans')]
    public const MERRIWEATHER_SANS = 'Merriweather Sans';

    /**
     * Metal.
     */
    #[Label('Metal')]
    #[Description('Metal')]
    public const METAL = 'Metal';

    /**
     * Metal Mania.
     */
    #[Label('Metal Mania')]
    #[Description('Metal Mania')]
    public const METAL_MANIA = 'Metal Mania';

    /**
     * Metamorphous.
     */
    #[Label('Metamorphous')]
    #[Description('Metamorphous')]
    public const METAMORPHOUS = 'Metamorphous';

    /**
     * Metrophobic.
     */
    #[Label('Metrophobic')]
    #[Description('Metrophobic')]
    public const METROPHOBIC = 'Metrophobic';

    /**
     * Michroma.
     */
    #[Label('Michroma')]
    #[Description('Michroma')]
    public const MICHROMA = 'Michroma';

    /**
     * Milonga.
     */
    #[Label('Milonga')]
    #[Description('Milonga')]
    public const MILONGA = 'Milonga';

    /**
     * Miltonian.
     */
    #[Label('Miltonian')]
    #[Description('Miltonian')]
    public const MILTONIAN = 'Miltonian';

    /**
     * Miltonian Tattoo.
     */
    #[Label('Miltonian Tattoo')]
    #[Description('Miltonian Tattoo')]
    public const MILTONIAN_TATTOO = 'Miltonian Tattoo';

    /**
     * Miniver.
     */
    #[Label('Miniver')]
    #[Description('Miniver')]
    public const MINIVER = 'Miniver';

    /**
     * Miriam Libre.
     */
    #[Label('Miriam Libre')]
    #[Description('Miriam Libre')]
    public const MIRIAM_LIBRE = 'Miriam Libre';

    /**
     * Mirza.
     */
    #[Label('Mirza')]
    #[Description('Mirza')]
    public const MIRZA = 'Mirza';

    /**
     * Miss Fajardose.
     */
    #[Label('Miss Fajardose')]
    #[Description('Miss Fajardose')]
    public const MISS_FAJARDOSE = 'Miss Fajardose';

    /**
     * Mitr.
     */
    #[Label('Mitr')]
    #[Description('Mitr')]
    public const MITR = 'Mitr';

    /**
     * Modak.
     */
    #[Label('Modak')]
    #[Description('Modak')]
    public const MODAK = 'Modak';

    /**
     * Modern Antiqua.
     */
    #[Label('Modern Antiqua')]
    #[Description('Modern Antiqua')]
    public const MODERN_ANTIQUA = 'Modern Antiqua';

    /**
     * Mogra.
     */
    #[Label('Mogra')]
    #[Description('Mogra')]
    public const MOGRA = 'Mogra';

    /**
     * Molengo.
     */
    #[Label('Molengo')]
    #[Description('Molengo')]
    public const MOLENGO = 'Molengo';

    /**
     * Molle.
     */
    #[Label('Molle')]
    #[Description('Molle')]
    public const MOLLE = 'Molle';

    /**
     * Monda.
     */
    #[Label('Monda')]
    #[Description('Monda')]
    public const MONDA = 'Monda';

    /**
     * Monofett.
     */
    #[Label('Monofett')]
    #[Description('Monofett')]
    public const MONOFETT = 'Monofett';

    /**
     * Monoton.
     */
    #[Label('Monoton')]
    #[Description('Monoton')]
    public const MONOTON = 'Monoton';

    /**
     * Monsieur La Doulaise.
     */
    #[Label('Monsieur La Doulaise')]
    #[Description('Monsieur La Doulaise')]
    public const MONSIEUR_LA_DOULAISE = 'Monsieur La Doulaise';

    /**
     * Montaga.
     */
    #[Label('Montaga')]
    #[Description('Montaga')]
    public const MONTAGA = 'Montaga';

    /**
     * Montez.
     */
    #[Label('Montez')]
    #[Description('Montez')]
    public const MONTEZ = 'Montez';

    /**
     * Montserrat.
     */
    #[Label('Montserrat')]
    #[Description('Montserrat')]
    public const MONTSERRAT = 'Montserrat';

    /**
     * Montserrat Alternates.
     */
    #[Label('Montserrat Alternates')]
    #[Description('Montserrat Alternates')]
    public const MONTSERRAT_ALTERNATES = 'Montserrat Alternates';

    /**
     * Montserrat Subrayada.
     */
    #[Label('Montserrat Subrayada')]
    #[Description('Montserrat Subrayada')]
    public const MONTSERRAT_SUBRAYADA = 'Montserrat Subrayada';

    /**
     * Moul.
     */
    #[Label('Moul')]
    #[Description('Moul')]
    public const MOUL = 'Moul';

    /**
     * Moulpali.
     */
    #[Label('Moulpali')]
    #[Description('Moulpali')]
    public const MOULPALI = 'Moulpali';

    /**
     * Mountains of Christmas.
     */
    #[Label('Mountains of Christmas')]
    #[Description('Mountains of Christmas')]
    public const MOUNTAINS_OF_CHRISTMAS = 'Mountains of Christmas';

    /**
     * Mouse Memoirs.
     */
    #[Label('Mouse Memoirs')]
    #[Description('Mouse Memoirs')]
    public const MOUSE_MEMOIRS = 'Mouse Memoirs';

    /**
     * Mr Bedfort.
     */
    #[Label('Mr Bedfort')]
    #[Description('Mr Bedfort')]
    public const MR_BEDFORT = 'Mr Bedfort';

    /**
     * Mr Dafoe.
     */
    #[Label('Mr Dafoe')]
    #[Description('Mr Dafoe')]
    public const MR_DAFOE = 'Mr Dafoe';

    /**
     * Mr De Haviland.
     */
    #[Label('Mr De Haviland')]
    #[Description('Mr De Haviland')]
    public const MR_DE_HAVILAND = 'Mr De Haviland';

    /**
     * Mrs Saint Delafield.
     */
    #[Label('Mrs Saint Delafield')]
    #[Description('Mrs Saint Delafield')]
    public const MRS_SAINT_DELAFIELD = 'Mrs Saint Delafield';

    /**
     * Mrs Sheppards.
     */
    #[Label('Mrs Sheppards')]
    #[Description('Mrs Sheppards')]
    public const MRS_SHEPPARDS = 'Mrs Sheppards';

    /**
     * Mukta.
     */
    #[Label('Mukta')]
    #[Description('Mukta')]
    public const MUKTA = 'Mukta';

    /**
     * Mukta Mahee.
     */
    #[Label('Mukta Mahee')]
    #[Description('Mukta Mahee')]
    public const MUKTA_MAHEE = 'Mukta Mahee';

    /**
     * Mukta Malar.
     */
    #[Label('Mukta Malar')]
    #[Description('Mukta Malar')]
    public const MUKTA_MALAR = 'Mukta Malar';

    /**
     * Mukta Vaani.
     */
    #[Label('Mukta Vaani')]
    #[Description('Mukta Vaani')]
    public const MUKTA_VAANI = 'Mukta Vaani';

    /**
     * Muli.
     */
    #[Label('Muli')]
    #[Description('Muli')]
    public const MULI = 'Muli';

    /**
     * Mystery Quest.
     */
    #[Label('Mystery Quest')]
    #[Description('Mystery Quest')]
    public const MYSTERY_QUEST = 'Mystery Quest';

    /**
     * NTR.
     */
    #[Label('NTR')]
    #[Description('NTR')]
    public const NTR = 'NTR';

    /**
     * Neucha.
     */
    #[Label('Neucha')]
    #[Description('Neucha')]
    public const NEUCHA = 'Neucha';

    /**
     * Neuton.
     */
    #[Label('Neuton')]
    #[Description('Neuton')]
    public const NEUTON = 'Neuton';

    /**
     * New Rocker.
     */
    #[Label('New Rocker')]
    #[Description('New Rocker')]
    public const NEW_ROCKER = 'New Rocker';

    /**
     * News Cycle.
     */
    #[Label('News Cycle')]
    #[Description('News Cycle')]
    public const NEWS_CYCLE = 'News Cycle';

    /**
     * Niconne.
     */
    #[Label('Niconne')]
    #[Description('Niconne')]
    public const NICONNE = 'Niconne';

    /**
     * Nixie One.
     */
    #[Label('Nixie One')]
    #[Description('Nixie One')]
    public const NIXIE_ONE = 'Nixie One';

    /**
     * Nobile.
     */
    #[Label('Nobile')]
    #[Description('Nobile')]
    public const NOBILE = 'Nobile';

    /**
     * Nokora.
     */
    #[Label('Nokora')]
    #[Description('Nokora')]
    public const NOKORA = 'Nokora';

    /**
     * Norican.
     */
    #[Label('Norican')]
    #[Description('Norican')]
    public const NORICAN = 'Norican';

    /**
     * Nosifer.
     */
    #[Label('Nosifer')]
    #[Description('Nosifer')]
    public const NOSIFER = 'Nosifer';

    /**
     * Nothing You Could Do.
     */
    #[Label('Nothing You Could Do')]
    #[Description('Nothing You Could Do')]
    public const NOTHING_YOU_COULD_DO = 'Nothing You Could Do';

    /**
     * Noticia Text.
     */
    #[Label('Noticia Text')]
    #[Description('Noticia Text')]
    public const NOTICIA_TEXT = 'Noticia Text';

    /**
     * Noto Sans.
     */
    #[Label('Noto Sans')]
    #[Description('Noto Sans')]
    public const NOTO_SANS = 'Noto Sans';

    /**
     * Noto Serif.
     */
    #[Label('Noto Serif')]
    #[Description('Noto Serif')]
    public const NOTO_SERIF = 'Noto Serif';

    /**
     * Nova Cut.
     */
    #[Label('Nova Cut')]
    #[Description('Nova Cut')]
    public const NOVA_CUT = 'Nova Cut';

    /**
     * Nova Flat.
     */
    #[Label('Nova Flat')]
    #[Description('Nova Flat')]
    public const NOVA_FLAT = 'Nova Flat';

    /**
     * Nova Mono.
     */
    #[Label('Nova Mono')]
    #[Description('Nova Mono')]
    public const NOVA_MONO = 'Nova Mono';

    /**
     * Nova Oval.
     */
    #[Label('Nova Oval')]
    #[Description('Nova Oval')]
    public const NOVA_OVAL = 'Nova Oval';

    /**
     * Nova Round.
     */
    #[Label('Nova Round')]
    #[Description('Nova Round')]
    public const NOVA_ROUND = 'Nova Round';

    /**
     * Nova Script.
     */
    #[Label('Nova Script')]
    #[Description('Nova Script')]
    public const NOVA_SCRIPT = 'Nova Script';

    /**
     * Nova Slim.
     */
    #[Label('Nova Slim')]
    #[Description('Nova Slim')]
    public const NOVA_SLIM = 'Nova Slim';

    /**
     * Nova Square.
     */
    #[Label('Nova Square')]
    #[Description('Nova Square')]
    public const NOVA_SQUARE = 'Nova Square';

    /**
     * Numans.
     */
    #[Label('Numans')]
    #[Description('Numans')]
    public const NUMANS = 'Numans';

    /**
     * Nunito.
     */
    #[Label('Nunito')]
    #[Description('Nunito')]
    public const NUNITO = 'Nunito';

    /**
     * Nunito Sans.
     */
    #[Label('Nunito Sans')]
    #[Description('Nunito Sans')]
    public const NUNITO_SANS = 'Nunito Sans';

    /**
     * Odor Mean Chey.
     */
    #[Label('Odor Mean Chey')]
    #[Description('Odor Mean Chey')]
    public const ODOR_MEAN_CHEY = 'Odor Mean Chey';

    /**
     * Offside.
     */
    #[Label('Offside')]
    #[Description('Offside')]
    public const OFFSIDE = 'Offside';

    /**
     * Old Standard TT.
     */
    #[Label('Old Standard TT')]
    #[Description('Old Standard TT')]
    public const OLD_STANDARD_TT = 'Old Standard TT';

    /**
     * Oldenburg.
     */
    #[Label('Oldenburg')]
    #[Description('Oldenburg')]
    public const OLDENBURG = 'Oldenburg';

    /**
     * Oleo Script.
     */
    #[Label('Oleo Script')]
    #[Description('Oleo Script')]
    public const OLEO_SCRIPT = 'Oleo Script';

    /**
     * Oleo Script Swash Caps.
     */
    #[Label('Oleo Script Swash Caps')]
    #[Description('Oleo Script Swash Caps')]
    public const OLEO_SCRIPT_SWASH_CAPS = 'Oleo Script Swash Caps';

    /**
     * Open Sans.
     */
    #[Label('Open Sans')]
    #[Description('Open Sans')]
    public const OPEN_SANS = 'Open Sans';

    /**
     * Open Sans Condensed.
     */
    #[Label('Open Sans Condensed')]
    #[Description('Open Sans Condensed')]
    public const OPEN_SANS_CONDENSED = 'Open Sans Condensed';

    /**
     * Oranienbaum.
     */
    #[Label('Oranienbaum')]
    #[Description('Oranienbaum')]
    public const ORANIENBAUM = 'Oranienbaum';

    /**
     * Orbitron.
     */
    #[Label('Orbitron')]
    #[Description('Orbitron')]
    public const ORBITRON = 'Orbitron';

    /**
     * Oregano.
     */
    #[Label('Oregano')]
    #[Description('Oregano')]
    public const OREGANO = 'Oregano';

    /**
     * Orienta.
     */
    #[Label('Orienta')]
    #[Description('Orienta')]
    public const ORIENTA = 'Orienta';

    /**
     * Original Surfer.
     */
    #[Label('Original Surfer')]
    #[Description('Original Surfer')]
    public const ORIGINAL_SURFER = 'Original Surfer';

    /**
     * Oswald.
     */
    #[Label('Oswald')]
    #[Description('Oswald')]
    public const OSWALD = 'Oswald';

    /**
     * Over the Rainbow.
     */
    #[Label('Over the Rainbow')]
    #[Description('Over the Rainbow')]
    public const OVER_THE_RAINBOW = 'Over the Rainbow';

    /**
     * Overlock.
     */
    #[Label('Overlock')]
    #[Description('Overlock')]
    public const OVERLOCK = 'Overlock';

    /**
     * Overlock SC.
     */
    #[Label('Overlock SC')]
    #[Description('Overlock SC')]
    public const OVERLOCK_SC = 'Overlock SC';

    /**
     * Overpass.
     */
    #[Label('Overpass')]
    #[Description('Overpass')]
    public const OVERPASS = 'Overpass';

    /**
     * Overpass Mono.
     */
    #[Label('Overpass Mono')]
    #[Description('Overpass Mono')]
    public const OVERPASS_MONO = 'Overpass Mono';

    /**
     * Ovo.
     */
    #[Label('Ovo')]
    #[Description('Ovo')]
    public const OVO = 'Ovo';

    /**
     * Oxygen.
     */
    #[Label('Oxygen')]
    #[Description('Oxygen')]
    public const OXYGEN = 'Oxygen';

    /**
     * Oxygen Mono.
     */
    #[Label('Oxygen Mono')]
    #[Description('Oxygen Mono')]
    public const OXYGEN_MONO = 'Oxygen Mono';

    /**
     * PT Mono.
     */
    #[Label('PT Mono')]
    #[Description('PT Mono')]
    public const PT_MONO = 'PT Mono';

    /**
     * PT Sans.
     */
    #[Label('PT Sans')]
    #[Description('PT Sans')]
    public const PT_SANS = 'PT Sans';

    /**
     * PT Sans Caption.
     */
    #[Label('PT Sans Caption')]
    #[Description('PT Sans Caption')]
    public const PT_SANS_CAPTION = 'PT Sans Caption';

    /**
     * PT Sans Narrow.
     */
    #[Label('PT Sans Narrow')]
    #[Description('PT Sans Narrow')]
    public const PT_SANS_NARROW = 'PT Sans Narrow';

    /**
     * PT Serif.
     */
    #[Label('PT Serif')]
    #[Description('PT Serif')]
    public const PT_SERIF = 'PT Serif';

    /**
     * PT Serif Caption.
     */
    #[Label('PT Serif Caption')]
    #[Description('PT Serif Caption')]
    public const PT_SERIF_CAPTION = 'PT Serif Caption';

    /**
     * Pacifico.
     */
    #[Label('Pacifico')]
    #[Description('Pacifico')]
    public const PACIFICO = 'Pacifico';

    /**
     * Padauk.
     */
    #[Label('Padauk')]
    #[Description('Padauk')]
    public const PADAUK = 'Padauk';

    /**
     * Palanquin.
     */
    #[Label('Palanquin')]
    #[Description('Palanquin')]
    public const PALANQUIN = 'Palanquin';

    /**
     * Palanquin Dark.
     */
    #[Label('Palanquin Dark')]
    #[Description('Palanquin Dark')]
    public const PALANQUIN_DARK = 'Palanquin Dark';

    /**
     * Pangolin.
     */
    #[Label('Pangolin')]
    #[Description('Pangolin')]
    public const PANGOLIN = 'Pangolin';

    /**
     * Paprika.
     */
    #[Label('Paprika')]
    #[Description('Paprika')]
    public const PAPRIKA = 'Paprika';

    /**
     * Parisienne.
     */
    #[Label('Parisienne')]
    #[Description('Parisienne')]
    public const PARISIENNE = 'Parisienne';

    /**
     * Passero One.
     */
    #[Label('Passero One')]
    #[Description('Passero One')]
    public const PASSERO_ONE = 'Passero One';

    /**
     * Passion One.
     */
    #[Label('Passion One')]
    #[Description('Passion One')]
    public const PASSION_ONE = 'Passion One';

    /**
     * Pathway Gothic One.
     */
    #[Label('Pathway Gothic One')]
    #[Description('Pathway Gothic One')]
    public const PATHWAY_GOTHIC_ONE = 'Pathway Gothic One';

    /**
     * Patrick Hand.
     */
    #[Label('Patrick Hand')]
    #[Description('Patrick Hand')]
    public const PATRICK_HAND = 'Patrick Hand';

    /**
     * Patrick Hand SC.
     */
    #[Label('Patrick Hand SC')]
    #[Description('Patrick Hand SC')]
    public const PATRICK_HAND_SC = 'Patrick Hand SC';

    /**
     * Pattaya.
     */
    #[Label('Pattaya')]
    #[Description('Pattaya')]
    public const PATTAYA = 'Pattaya';

    /**
     * Patua One.
     */
    #[Label('Patua One')]
    #[Description('Patua One')]
    public const PATUA_ONE = 'Patua One';

    /**
     * Pavanam.
     */
    #[Label('Pavanam')]
    #[Description('Pavanam')]
    public const PAVANAM = 'Pavanam';

    /**
     * Paytone One.
     */
    #[Label('Paytone One')]
    #[Description('Paytone One')]
    public const PAYTONE_ONE = 'Paytone One';

    /**
     * Peddana.
     */
    #[Label('Peddana')]
    #[Description('Peddana')]
    public const PEDDANA = 'Peddana';

    /**
     * Peralta.
     */
    #[Label('Peralta')]
    #[Description('Peralta')]
    public const PERALTA = 'Peralta';

    /**
     * Permanent Marker.
     */
    #[Label('Permanent Marker')]
    #[Description('Permanent Marker')]
    public const PERMANENT_MARKER = 'Permanent Marker';

    /**
     * Petit Formal Script.
     */
    #[Label('Petit Formal Script')]
    #[Description('Petit Formal Script')]
    public const PETIT_FORMAL_SCRIPT = 'Petit Formal Script';

    /**
     * Petrona.
     */
    #[Label('Petrona')]
    #[Description('Petrona')]
    public const PETRONA = 'Petrona';

    /**
     * Philosopher.
     */
    #[Label('Philosopher')]
    #[Description('Philosopher')]
    public const PHILOSOPHER = 'Philosopher';

    /**
     * Piedra.
     */
    #[Label('Piedra')]
    #[Description('Piedra')]
    public const PIEDRA = 'Piedra';

    /**
     * Pinyon Script.
     */
    #[Label('Pinyon Script')]
    #[Description('Pinyon Script')]
    public const PINYON_SCRIPT = 'Pinyon Script';

    /**
     * Pirata One.
     */
    #[Label('Pirata One')]
    #[Description('Pirata One')]
    public const PIRATA_ONE = 'Pirata One';

    /**
     * Plaster.
     */
    #[Label('Plaster')]
    #[Description('Plaster')]
    public const PLASTER = 'Plaster';

    /**
     * Play.
     */
    #[Label('Play')]
    #[Description('Play')]
    public const PLAY = 'Play';

    /**
     * Playball.
     */
    #[Label('Playball')]
    #[Description('Playball')]
    public const PLAYBALL = 'Playball';

    /**
     * Playfair Display.
     */
    #[Label('Playfair Display')]
    #[Description('Playfair Display')]
    public const PLAYFAIR_DISPLAY = 'Playfair Display';

    /**
     * Playfair Display SC.
     */
    #[Label('Playfair Display SC')]
    #[Description('Playfair Display SC')]
    public const PLAYFAIR_DISPLAY_SC = 'Playfair Display SC';

    /**
     * Podkova.
     */
    #[Label('Podkova')]
    #[Description('Podkova')]
    public const PODKOVA = 'Podkova';

    /**
     * Poiret One.
     */
    #[Label('Poiret One')]
    #[Description('Poiret One')]
    public const POIRET_ONE = 'Poiret One';

    /**
     * Poller One.
     */
    #[Label('Poller One')]
    #[Description('Poller One')]
    public const POLLER_ONE = 'Poller One';

    /**
     * Poly.
     */
    #[Label('Poly')]
    #[Description('Poly')]
    public const POLY = 'Poly';

    /**
     * Pompiere.
     */
    #[Label('Pompiere')]
    #[Description('Pompiere')]
    public const POMPIERE = 'Pompiere';

    /**
     * Pontano Sans.
     */
    #[Label('Pontano Sans')]
    #[Description('Pontano Sans')]
    public const PONTANO_SANS = 'Pontano Sans';

    /**
     * Poppins.
     */
    #[Label('Poppins')]
    #[Description('Poppins')]
    public const POPPINS = 'Poppins';

    /**
     * Port Lligat Sans.
     */
    #[Label('Port Lligat Sans')]
    #[Description('Port Lligat Sans')]
    public const PORT_LLIGAT_SANS = 'Port Lligat Sans';

    /**
     * Port Lligat Slab.
     */
    #[Label('Port Lligat Slab')]
    #[Description('Port Lligat Slab')]
    public const PORT_LLIGAT_SLAB = 'Port Lligat Slab';

    /**
     * Pragati Narrow.
     */
    #[Label('Pragati Narrow')]
    #[Description('Pragati Narrow')]
    public const PRAGATI_NARROW = 'Pragati Narrow';

    /**
     * Prata.
     */
    #[Label('Prata')]
    #[Description('Prata')]
    public const PRATA = 'Prata';

    /**
     * Preahvihear.
     */
    #[Label('Preahvihear')]
    #[Description('Preahvihear')]
    public const PREAHVIHEAR = 'Preahvihear';

    /**
     * Press Start 2P.
     */
    #[Label('Press Start 2P')]
    #[Description('Press Start 2P')]
    public const PRESS_START_2P = 'Press Start 2P';

    /**
     * Pridi.
     */
    #[Label('Pridi')]
    #[Description('Pridi')]
    public const PRIDI = 'Pridi';

    /**
     * Princess Sofia.
     */
    #[Label('Princess Sofia')]
    #[Description('Princess Sofia')]
    public const PRINCESS_SOFIA = 'Princess Sofia';

    /**
     * Prociono.
     */
    #[Label('Prociono')]
    #[Description('Prociono')]
    public const PROCIONO = 'Prociono';

    /**
     * Prompt.
     */
    #[Label('Prompt')]
    #[Description('Prompt')]
    public const PROMPT = 'Prompt';

    /**
     * Prosto One.
     */
    #[Label('Prosto One')]
    #[Description('Prosto One')]
    public const PROSTO_ONE = 'Prosto One';

    /**
     * Proza Libre.
     */
    #[Label('Proza Libre')]
    #[Description('Proza Libre')]
    public const PROZA_LIBRE = 'Proza Libre';

    /**
     * Puritan.
     */
    #[Label('Puritan')]
    #[Description('Puritan')]
    public const PURITAN = 'Puritan';

    /**
     * Purple Purse.
     */
    #[Label('Purple Purse')]
    #[Description('Purple Purse')]
    public const PURPLE_PURSE = 'Purple Purse';

    /**
     * Quando.
     */
    #[Label('Quando')]
    #[Description('Quando')]
    public const QUANDO = 'Quando';

    /**
     * Quantico.
     */
    #[Label('Quantico')]
    #[Description('Quantico')]
    public const QUANTICO = 'Quantico';

    /**
     * Quattrocento.
     */
    #[Label('Quattrocento')]
    #[Description('Quattrocento')]
    public const QUATTROCENTO = 'Quattrocento';

    /**
     * Quattrocento Sans.
     */
    #[Label('Quattrocento Sans')]
    #[Description('Quattrocento Sans')]
    public const QUATTROCENTO_SANS = 'Quattrocento Sans';

    /**
     * Questrial.
     */
    #[Label('Questrial')]
    #[Description('Questrial')]
    public const QUESTRIAL = 'Questrial';

    /**
     * Quicksand.
     */
    #[Label('Quicksand')]
    #[Description('Quicksand')]
    public const QUICKSAND = 'Quicksand';

    /**
     * Quintessential.
     */
    #[Label('Quintessential')]
    #[Description('Quintessential')]
    public const QUINTESSENTIAL = 'Quintessential';

    /**
     * Qwigley.
     */
    #[Label('Qwigley')]
    #[Description('Qwigley')]
    public const QWIGLEY = 'Qwigley';

    /**
     * Racing Sans One.
     */
    #[Label('Racing Sans One')]
    #[Description('Racing Sans One')]
    public const RACING_SANS_ONE = 'Racing Sans One';

    /**
     * Radley.
     */
    #[Label('Radley')]
    #[Description('Radley')]
    public const RADLEY = 'Radley';

    /**
     * Rajdhani.
     */
    #[Label('Rajdhani')]
    #[Description('Rajdhani')]
    public const RAJDHANI = 'Rajdhani';

    /**
     * Rakkas.
     */
    #[Label('Rakkas')]
    #[Description('Rakkas')]
    public const RAKKAS = 'Rakkas';

    /**
     * Raleway.
     */
    #[Label('Raleway')]
    #[Description('Raleway')]
    public const RALEWAY = 'Raleway';

    /**
     * Raleway Dots.
     */
    #[Label('Raleway Dots')]
    #[Description('Raleway Dots')]
    public const RALEWAY_DOTS = 'Raleway Dots';

    /**
     * Ramabhadra.
     */
    #[Label('Ramabhadra')]
    #[Description('Ramabhadra')]
    public const RAMABHADRA = 'Ramabhadra';

    /**
     * Ramaraja.
     */
    #[Label('Ramaraja')]
    #[Description('Ramaraja')]
    public const RAMARAJA = 'Ramaraja';

    /**
     * Rambla.
     */
    #[Label('Rambla')]
    #[Description('Rambla')]
    public const RAMBLA = 'Rambla';

    /**
     * Rammetto One.
     */
    #[Label('Rammetto One')]
    #[Description('Rammetto One')]
    public const RAMMETTO_ONE = 'Rammetto One';

    /**
     * Ranchers.
     */
    #[Label('Ranchers')]
    #[Description('Ranchers')]
    public const RANCHERS = 'Ranchers';

    /**
     * Rancho.
     */
    #[Label('Rancho')]
    #[Description('Rancho')]
    public const RANCHO = 'Rancho';

    /**
     * Ranga.
     */
    #[Label('Ranga')]
    #[Description('Ranga')]
    public const RANGA = 'Ranga';

    /**
     * Rasa.
     */
    #[Label('Rasa')]
    #[Description('Rasa')]
    public const RASA = 'Rasa';

    /**
     * Rationale.
     */
    #[Label('Rationale')]
    #[Description('Rationale')]
    public const RATIONALE = 'Rationale';

    /**
     * Ravi Prakash.
     */
    #[Label('Ravi Prakash')]
    #[Description('Ravi Prakash')]
    public const RAVI_PRAKASH = 'Ravi Prakash';

    /**
     * Redressed.
     */
    #[Label('Redressed')]
    #[Description('Redressed')]
    public const REDRESSED = 'Redressed';

    /**
     * Reem Kufi.
     */
    #[Label('Reem Kufi')]
    #[Description('Reem Kufi')]
    public const REEM_KUFI = 'Reem Kufi';

    /**
     * Reenie Beanie.
     */
    #[Label('Reenie Beanie')]
    #[Description('Reenie Beanie')]
    public const REENIE_BEANIE = 'Reenie Beanie';

    /**
     * Revalia.
     */
    #[Label('Revalia')]
    #[Description('Revalia')]
    public const REVALIA = 'Revalia';

    /**
     * Rhodium Libre.
     */
    #[Label('Rhodium Libre')]
    #[Description('Rhodium Libre')]
    public const RHODIUM_LIBRE = 'Rhodium Libre';

    /**
     * Ribeye.
     */
    #[Label('Ribeye')]
    #[Description('Ribeye')]
    public const RIBEYE = 'Ribeye';

    /**
     * Ribeye Marrow.
     */
    #[Label('Ribeye Marrow')]
    #[Description('Ribeye Marrow')]
    public const RIBEYE_MARROW = 'Ribeye Marrow';

    /**
     * Righteous.
     */
    #[Label('Righteous')]
    #[Description('Righteous')]
    public const RIGHTEOUS = 'Righteous';

    /**
     * Risque.
     */
    #[Label('Risque')]
    #[Description('Risque')]
    public const RISQUE = 'Risque';

    /**
     * Roboto.
     */
    #[Label('Roboto')]
    #[Description('Roboto')]
    public const ROBOTO = 'Roboto';

    /**
     * Roboto Condensed.
     */
    #[Label('Roboto Condensed')]
    #[Description('Roboto Condensed')]
    public const ROBOTO_CONDENSED = 'Roboto Condensed';

    /**
     * Roboto Mono.
     */
    #[Label('Roboto Mono')]
    #[Description('Roboto Mono')]
    public const ROBOTO_MONO = 'Roboto Mono';

    /**
     * Roboto Slab.
     */
    #[Label('Roboto Slab')]
    #[Description('Roboto Slab')]
    public const ROBOTO_SLAB = 'Roboto Slab';

    /**
     * Rochester.
     */
    #[Label('Rochester')]
    #[Description('Rochester')]
    public const ROCHESTER = 'Rochester';

    /**
     * Rock Salt.
     */
    #[Label('Rock Salt')]
    #[Description('Rock Salt')]
    public const ROCK_SALT = 'Rock Salt';

    /**
     * Rokkitt.
     */
    #[Label('Rokkitt')]
    #[Description('Rokkitt')]
    public const ROKKITT = 'Rokkitt';

    /**
     * Romanesco.
     */
    #[Label('Romanesco')]
    #[Description('Romanesco')]
    public const ROMANESCO = 'Romanesco';

    /**
     * Ropa Sans.
     */
    #[Label('Ropa Sans')]
    #[Description('Ropa Sans')]
    public const ROPA_SANS = 'Ropa Sans';

    /**
     * Rosario.
     */
    #[Label('Rosario')]
    #[Description('Rosario')]
    public const ROSARIO = 'Rosario';

    /**
     * Rosarivo.
     */
    #[Label('Rosarivo')]
    #[Description('Rosarivo')]
    public const ROSARIVO = 'Rosarivo';

    /**
     * Rouge Script.
     */
    #[Label('Rouge Script')]
    #[Description('Rouge Script')]
    public const ROUGE_SCRIPT = 'Rouge Script';

    /**
     * Rozha One.
     */
    #[Label('Rozha One')]
    #[Description('Rozha One')]
    public const ROZHA_ONE = 'Rozha One';

    /**
     * Rubik.
     */
    #[Label('Rubik')]
    #[Description('Rubik')]
    public const RUBIK = 'Rubik';

    /**
     * Rubik Mono One.
     */
    #[Label('Rubik Mono One')]
    #[Description('Rubik Mono One')]
    public const RUBIK_MONO_ONE = 'Rubik Mono One';

    /**
     * Ruda.
     */
    #[Label('Ruda')]
    #[Description('Ruda')]
    public const RUDA = 'Ruda';

    /**
     * Rufina.
     */
    #[Label('Rufina')]
    #[Description('Rufina')]
    public const RUFINA = 'Rufina';

    /**
     * Ruge Boogie.
     */
    #[Label('Ruge Boogie')]
    #[Description('Ruge Boogie')]
    public const RUGE_BOOGIE = 'Ruge Boogie';

    /**
     * Ruluko.
     */
    #[Label('Ruluko')]
    #[Description('Ruluko')]
    public const RULUKO = 'Ruluko';

    /**
     * Rum Raisin.
     */
    #[Label('Rum Raisin')]
    #[Description('Rum Raisin')]
    public const RUM_RAISIN = 'Rum Raisin';

    /**
     * Ruslan Display.
     */
    #[Label('Ruslan Display')]
    #[Description('Ruslan Display')]
    public const RUSLAN_DISPLAY = 'Ruslan Display';

    /**
     * Russo One.
     */
    #[Label('Russo One')]
    #[Description('Russo One')]
    public const RUSSO_ONE = 'Russo One';

    /**
     * Ruthie.
     */
    #[Label('Ruthie')]
    #[Description('Ruthie')]
    public const RUTHIE = 'Ruthie';

    /**
     * Rye.
     */
    #[Label('Rye')]
    #[Description('Rye')]
    public const RYE = 'Rye';

    /**
     * Sacramento.
     */
    #[Label('Sacramento')]
    #[Description('Sacramento')]
    public const SACRAMENTO = 'Sacramento';

    /**
     * Sahitya.
     */
    #[Label('Sahitya')]
    #[Description('Sahitya')]
    public const SAHITYA = 'Sahitya';

    /**
     * Sail.
     */
    #[Label('Sail')]
    #[Description('Sail')]
    public const SAIL = 'Sail';

    /**
     * Saira.
     */
    #[Label('Saira')]
    #[Description('Saira')]
    public const SAIRA = 'Saira';

    /**
     * Saira Condensed.
     */
    #[Label('Saira Condensed')]
    #[Description('Saira Condensed')]
    public const SAIRA_CONDENSED = 'Saira Condensed';

    /**
     * Saira Extra Condensed.
     */
    #[Label('Saira Extra Condensed')]
    #[Description('Saira Extra Condensed')]
    public const SAIRA_EXTRA_CONDENSED = 'Saira Extra Condensed';

    /**
     * Saira Semi Condensed.
     */
    #[Label('Saira Semi Condensed')]
    #[Description('Saira Semi Condensed')]
    public const SAIRA_SEMI_CONDENSED = 'Saira Semi Condensed';

    /**
     * Salsa.
     */
    #[Label('Salsa')]
    #[Description('Salsa')]
    public const SALSA = 'Salsa';

    /**
     * Sanchez.
     */
    #[Label('Sanchez')]
    #[Description('Sanchez')]
    public const SANCHEZ = 'Sanchez';

    /**
     * Sancreek.
     */
    #[Label('Sancreek')]
    #[Description('Sancreek')]
    public const SANCREEK = 'Sancreek';

    /**
     * Sansita.
     */
    #[Label('Sansita')]
    #[Description('Sansita')]
    public const SANSITA = 'Sansita';

    /**
     * Sarala.
     */
    #[Label('Sarala')]
    #[Description('Sarala')]
    public const SARALA = 'Sarala';

    /**
     * Sarina.
     */
    #[Label('Sarina')]
    #[Description('Sarina')]
    public const SARINA = 'Sarina';

    /**
     * Sarpanch.
     */
    #[Label('Sarpanch')]
    #[Description('Sarpanch')]
    public const SARPANCH = 'Sarpanch';

    /**
     * Satisfy.
     */
    #[Label('Satisfy')]
    #[Description('Satisfy')]
    public const SATISFY = 'Satisfy';

    /**
     * Scada.
     */
    #[Label('Scada')]
    #[Description('Scada')]
    public const SCADA = 'Scada';

    /**
     * Scheherazade.
     */
    #[Label('Scheherazade')]
    #[Description('Scheherazade')]
    public const SCHEHERAZADE = 'Scheherazade';

    /**
     * Schoolbell.
     */
    #[Label('Schoolbell')]
    #[Description('Schoolbell')]
    public const SCHOOLBELL = 'Schoolbell';

    /**
     * Scope One.
     */
    #[Label('Scope One')]
    #[Description('Scope One')]
    public const SCOPE_ONE = 'Scope One';

    /**
     * Seaweed Script.
     */
    #[Label('Seaweed Script')]
    #[Description('Seaweed Script')]
    public const SEAWEED_SCRIPT = 'Seaweed Script';

    /**
     * Secular One.
     */
    #[Label('Secular One')]
    #[Description('Secular One')]
    public const SECULAR_ONE = 'Secular One';

    /**
     * Sedgwick Ave.
     */
    #[Label('Sedgwick Ave')]
    #[Description('Sedgwick Ave')]
    public const SEDGWICK_AVE = 'Sedgwick Ave';

    /**
     * Sedgwick Ave Display.
     */
    #[Label('Sedgwick Ave Display')]
    #[Description('Sedgwick Ave Display')]
    public const SEDGWICK_AVE_DISPLAY = 'Sedgwick Ave Display';

    /**
     * Sevillana.
     */
    #[Label('Sevillana')]
    #[Description('Sevillana')]
    public const SEVILLANA = 'Sevillana';

    /**
     * Seymour One.
     */
    #[Label('Seymour One')]
    #[Description('Seymour One')]
    public const SEYMOUR_ONE = 'Seymour One';

    /**
     * Shadows Into Light.
     */
    #[Label('Shadows Into Light')]
    #[Description('Shadows Into Light')]
    public const SHADOWS_INTO_LIGHT = 'Shadows Into Light';

    /**
     * Shadows Into Light Two.
     */
    #[Label('Shadows Into Light Two')]
    #[Description('Shadows Into Light Two')]
    public const SHADOWS_INTO_LIGHT_TWO = 'Shadows Into Light Two';

    /**
     * Shanti.
     */
    #[Label('Shanti')]
    #[Description('Shanti')]
    public const SHANTI = 'Shanti';

    /**
     * Share.
     */
    #[Label('Share')]
    #[Description('Share')]
    public const SHARE = 'Share';

    /**
     * Share Tech.
     */
    #[Label('Share Tech')]
    #[Description('Share Tech')]
    public const SHARE_TECH = 'Share Tech';

    /**
     * Share Tech Mono.
     */
    #[Label('Share Tech Mono')]
    #[Description('Share Tech Mono')]
    public const SHARE_TECH_MONO = 'Share Tech Mono';

    /**
     * Shojumaru.
     */
    #[Label('Shojumaru')]
    #[Description('Shojumaru')]
    public const SHOJUMARU = 'Shojumaru';

    /**
     * Short Stack.
     */
    #[Label('Short Stack')]
    #[Description('Short Stack')]
    public const SHORT_STACK = 'Short Stack';

    /**
     * Shrikhand.
     */
    #[Label('Shrikhand')]
    #[Description('Shrikhand')]
    public const SHRIKHAND = 'Shrikhand';

    /**
     * Siemreap.
     */
    #[Label('Siemreap')]
    #[Description('Siemreap')]
    public const SIEMREAP = 'Siemreap';

    /**
     * Sigmar One.
     */
    #[Label('Sigmar One')]
    #[Description('Sigmar One')]
    public const SIGMAR_ONE = 'Sigmar One';

    /**
     * Signika.
     */
    #[Label('Signika')]
    #[Description('Signika')]
    public const SIGNIKA = 'Signika';

    /**
     * Signika Negative.
     */
    #[Label('Signika Negative')]
    #[Description('Signika Negative')]
    public const SIGNIKA_NEGATIVE = 'Signika Negative';

    /**
     * Simonetta.
     */
    #[Label('Simonetta')]
    #[Description('Simonetta')]
    public const SIMONETTA = 'Simonetta';

    /**
     * Sintony.
     */
    #[Label('Sintony')]
    #[Description('Sintony')]
    public const SINTONY = 'Sintony';

    /**
     * Sirin Stencil.
     */
    #[Label('Sirin Stencil')]
    #[Description('Sirin Stencil')]
    public const SIRIN_STENCIL = 'Sirin Stencil';

    /**
     * Six Caps.
     */
    #[Label('Six Caps')]
    #[Description('Six Caps')]
    public const SIX_CAPS = 'Six Caps';

    /**
     * Skranji.
     */
    #[Label('Skranji')]
    #[Description('Skranji')]
    public const SKRANJI = 'Skranji';

    /**
     * Slabo 13px.
     */
    #[Label('Slabo 13px')]
    #[Description('Slabo 13px')]
    public const SLABO_13PX = 'Slabo 13px';

    /**
     * Slabo 27px.
     */
    #[Label('Slabo 27px')]
    #[Description('Slabo 27px')]
    public const SLABO_27PX = 'Slabo 27px';

    /**
     * Slackey.
     */
    #[Label('Slackey')]
    #[Description('Slackey')]
    public const SLACKEY = 'Slackey';

    /**
     * Smokum.
     */
    #[Label('Smokum')]
    #[Description('Smokum')]
    public const SMOKUM = 'Smokum';

    /**
     * Smythe.
     */
    #[Label('Smythe')]
    #[Description('Smythe')]
    public const SMYTHE = 'Smythe';

    /**
     * Sniglet.
     */
    #[Label('Sniglet')]
    #[Description('Sniglet')]
    public const SNIGLET = 'Sniglet';

    /**
     * Snippet.
     */
    #[Label('Snippet')]
    #[Description('Snippet')]
    public const SNIPPET = 'Snippet';

    /**
     * Snowburst One.
     */
    #[Label('Snowburst One')]
    #[Description('Snowburst One')]
    public const SNOWBURST_ONE = 'Snowburst One';

    /**
     * Sofadi One.
     */
    #[Label('Sofadi One')]
    #[Description('Sofadi One')]
    public const SOFADI_ONE = 'Sofadi One';

    /**
     * Sofia.
     */
    #[Label('Sofia')]
    #[Description('Sofia')]
    public const SOFIA = 'Sofia';

    /**
     * Sonsie One.
     */
    #[Label('Sonsie One')]
    #[Description('Sonsie One')]
    public const SONSIE_ONE = 'Sonsie One';

    /**
     * Sorts Mill Goudy.
     */
    #[Label('Sorts Mill Goudy')]
    #[Description('Sorts Mill Goudy')]
    public const SORTS_MILL_GOUDY = 'Sorts Mill Goudy';

    /**
     * Source Code Pro.
     */
    #[Label('Source Code Pro')]
    #[Description('Source Code Pro')]
    public const SOURCE_CODE_PRO = 'Source Code Pro';

    /**
     * Source Sans Pro.
     */
    #[Label('Source Sans Pro')]
    #[Description('Source Sans Pro')]
    public const SOURCE_SANS_PRO = 'Source Sans Pro';

    /**
     * Source Serif Pro.
     */
    #[Label('Source Serif Pro')]
    #[Description('Source Serif Pro')]
    public const SOURCE_SERIF_PRO = 'Source Serif Pro';

    /**
     * Space Mono.
     */
    #[Label('Space Mono')]
    #[Description('Space Mono')]
    public const SPACE_MONO = 'Space Mono';

    /**
     * Special Elite.
     */
    #[Label('Special Elite')]
    #[Description('Special Elite')]
    public const SPECIAL_ELITE = 'Special Elite';

    /**
     * Spectral.
     */
    #[Label('Spectral')]
    #[Description('Spectral')]
    public const SPECTRAL = 'Spectral';

    /**
     * Spectral SC.
     */
    #[Label('Spectral SC')]
    #[Description('Spectral SC')]
    public const SPECTRAL_SC = 'Spectral SC';

    /**
     * Spicy Rice.
     */
    #[Label('Spicy Rice')]
    #[Description('Spicy Rice')]
    public const SPICY_RICE = 'Spicy Rice';

    /**
     * Spinnaker.
     */
    #[Label('Spinnaker')]
    #[Description('Spinnaker')]
    public const SPINNAKER = 'Spinnaker';

    /**
     * Spirax.
     */
    #[Label('Spirax')]
    #[Description('Spirax')]
    public const SPIRAX = 'Spirax';

    /**
     * Squada One.
     */
    #[Label('Squada One')]
    #[Description('Squada One')]
    public const SQUADA_ONE = 'Squada One';

    /**
     * Sree Krushnadevaraya.
     */
    #[Label('Sree Krushnadevaraya')]
    #[Description('Sree Krushnadevaraya')]
    public const SREE_KRUSHNADEVARAYA = 'Sree Krushnadevaraya';

    /**
     * Sriracha.
     */
    #[Label('Sriracha')]
    #[Description('Sriracha')]
    public const SRIRACHA = 'Sriracha';

    /**
     * Stalemate.
     */
    #[Label('Stalemate')]
    #[Description('Stalemate')]
    public const STALEMATE = 'Stalemate';

    /**
     * Stalinist One.
     */
    #[Label('Stalinist One')]
    #[Description('Stalinist One')]
    public const STALINIST_ONE = 'Stalinist One';

    /**
     * Stardos Stencil.
     */
    #[Label('Stardos Stencil')]
    #[Description('Stardos Stencil')]
    public const STARDOS_STENCIL = 'Stardos Stencil';

    /**
     * Stint Ultra Condensed.
     */
    #[Label('Stint Ultra Condensed')]
    #[Description('Stint Ultra Condensed')]
    public const STINT_ULTRA_CONDENSED = 'Stint Ultra Condensed';

    /**
     * Stint Ultra Expanded.
     */
    #[Label('Stint Ultra Expanded')]
    #[Description('Stint Ultra Expanded')]
    public const STINT_ULTRA_EXPANDED = 'Stint Ultra Expanded';

    /**
     * Stoke.
     */
    #[Label('Stoke')]
    #[Description('Stoke')]
    public const STOKE = 'Stoke';

    /**
     * Strait.
     */
    #[Label('Strait')]
    #[Description('Strait')]
    public const STRAIT = 'Strait';

    /**
     * Sue Ellen Francisco.
     */
    #[Label('Sue Ellen Francisco')]
    #[Description('Sue Ellen Francisco')]
    public const SUE_ELLEN_FRANCISCO = 'Sue Ellen Francisco';

    /**
     * Suez One.
     */
    #[Label('Suez One')]
    #[Description('Suez One')]
    public const SUEZ_ONE = 'Suez One';

    /**
     * Sumana.
     */
    #[Label('Sumana')]
    #[Description('Sumana')]
    public const SUMANA = 'Sumana';

    /**
     * Sunshiney.
     */
    #[Label('Sunshiney')]
    #[Description('Sunshiney')]
    public const SUNSHINEY = 'Sunshiney';

    /**
     * Supermercado One.
     */
    #[Label('Supermercado One')]
    #[Description('Supermercado One')]
    public const SUPERMERCADO_ONE = 'Supermercado One';

    /**
     * Sura.
     */
    #[Label('Sura')]
    #[Description('Sura')]
    public const SURA = 'Sura';

    /**
     * Suranna.
     */
    #[Label('Suranna')]
    #[Description('Suranna')]
    public const SURANNA = 'Suranna';

    /**
     * Suravaram.
     */
    #[Label('Suravaram')]
    #[Description('Suravaram')]
    public const SURAVARAM = 'Suravaram';

    /**
     * Suwannaphum.
     */
    #[Label('Suwannaphum')]
    #[Description('Suwannaphum')]
    public const SUWANNAPHUM = 'Suwannaphum';

    /**
     * Swanky and Moo Moo.
     */
    #[Label('Swanky and Moo Moo')]
    #[Description('Swanky and Moo Moo')]
    public const SWANKY_AND_MOO_MOO = 'Swanky and Moo Moo';

    /**
     * Syncopate.
     */
    #[Label('Syncopate')]
    #[Description('Syncopate')]
    public const SYNCOPATE = 'Syncopate';

    /**
     * Tangerine.
     */
    #[Label('Tangerine')]
    #[Description('Tangerine')]
    public const TANGERINE = 'Tangerine';

    /**
     * Taprom.
     */
    #[Label('Taprom')]
    #[Description('Taprom')]
    public const TAPROM = 'Taprom';

    /**
     * Tauri.
     */
    #[Label('Tauri')]
    #[Description('Tauri')]
    public const TAURI = 'Tauri';

    /**
     * Taviraj.
     */
    #[Label('Taviraj')]
    #[Description('Taviraj')]
    public const TAVIRAJ = 'Taviraj';

    /**
     * Teko.
     */
    #[Label('Teko')]
    #[Description('Teko')]
    public const TEKO = 'Teko';

    /**
     * Telex.
     */
    #[Label('Telex')]
    #[Description('Telex')]
    public const TELEX = 'Telex';

    /**
     * Tenali Ramakrishna.
     */
    #[Label('Tenali Ramakrishna')]
    #[Description('Tenali Ramakrishna')]
    public const TENALI_RAMAKRISHNA = 'Tenali Ramakrishna';

    /**
     * Tenor Sans.
     */
    #[Label('Tenor Sans')]
    #[Description('Tenor Sans')]
    public const TENOR_SANS = 'Tenor Sans';

    /**
     * Text Me One.
     */
    #[Label('Text Me One')]
    #[Description('Text Me One')]
    public const TEXT_ME_ONE = 'Text Me One';

    /**
     * The Girl Next Door.
     */
    #[Label('The Girl Next Door')]
    #[Description('The Girl Next Door')]
    public const THE_GIRL_NEXT_DOOR = 'The Girl Next Door';

    /**
     * Tienne.
     */
    #[Label('Tienne')]
    #[Description('Tienne')]
    public const TIENNE = 'Tienne';

    /**
     * Tillana.
     */
    #[Label('Tillana')]
    #[Description('Tillana')]
    public const TILLANA = 'Tillana';

    /**
     * Timmana.
     */
    #[Label('Timmana')]
    #[Description('Timmana')]
    public const TIMMANA = 'Timmana';

    /**
     * Tinos.
     */
    #[Label('Tinos')]
    #[Description('Tinos')]
    public const TINOS = 'Tinos';

    /**
     * Titan One.
     */
    #[Label('Titan One')]
    #[Description('Titan One')]
    public const TITAN_ONE = 'Titan One';

    /**
     * Titillium Web.
     */
    #[Label('Titillium Web')]
    #[Description('Titillium Web')]
    public const TITILLIUM_WEB = 'Titillium Web';

    /**
     * Trade Winds.
     */
    #[Label('Trade Winds')]
    #[Description('Trade Winds')]
    public const TRADE_WINDS = 'Trade Winds';

    /**
     * Trirong.
     */
    #[Label('Trirong')]
    #[Description('Trirong')]
    public const TRIRONG = 'Trirong';

    /**
     * Trocchi.
     */
    #[Label('Trocchi')]
    #[Description('Trocchi')]
    public const TROCCHI = 'Trocchi';

    /**
     * Trochut.
     */
    #[Label('Trochut')]
    #[Description('Trochut')]
    public const TROCHUT = 'Trochut';

    /**
     * Trykker.
     */
    #[Label('Trykker')]
    #[Description('Trykker')]
    public const TRYKKER = 'Trykker';

    /**
     * Tulpen One.
     */
    #[Label('Tulpen One')]
    #[Description('Tulpen One')]
    public const TULPEN_ONE = 'Tulpen One';

    /**
     * Ubuntu.
     */
    #[Label('Ubuntu')]
    #[Description('Ubuntu')]
    public const UBUNTU = 'Ubuntu';

    /**
     * Ubuntu Condensed.
     */
    #[Label('Ubuntu Condensed')]
    #[Description('Ubuntu Condensed')]
    public const UBUNTU_CONDENSED = 'Ubuntu Condensed';

    /**
     * Ubuntu Mono.
     */
    #[Label('Ubuntu Mono')]
    #[Description('Ubuntu Mono')]
    public const UBUNTU_MONO = 'Ubuntu Mono';

    /**
     * Ultra.
     */
    #[Label('Ultra')]
    #[Description('Ultra')]
    public const ULTRA = 'Ultra';

    /**
     * Uncial Antiqua.
     */
    #[Label('Uncial Antiqua')]
    #[Description('Uncial Antiqua')]
    public const UNCIAL_ANTIQUA = 'Uncial Antiqua';

    /**
     * Underdog.
     */
    #[Label('Underdog')]
    #[Description('Underdog')]
    public const UNDERDOG = 'Underdog';

    /**
     * Unica One.
     */
    #[Label('Unica One')]
    #[Description('Unica One')]
    public const UNICA_ONE = 'Unica One';

    /**
     * UnifrakturCook.
     */
    #[Label('UnifrakturCook')]
    #[Description('UnifrakturCook')]
    public const UNIFRAKTURCOOK = 'UnifrakturCook';

    /**
     * UnifrakturMaguntia.
     */
    #[Label('UnifrakturMaguntia')]
    #[Description('UnifrakturMaguntia')]
    public const UNIFRAKTURMAGUNTIA = 'UnifrakturMaguntia';

    /**
     * Unkempt.
     */
    #[Label('Unkempt')]
    #[Description('Unkempt')]
    public const UNKEMPT = 'Unkempt';

    /**
     * Unlock.
     */
    #[Label('Unlock')]
    #[Description('Unlock')]
    public const UNLOCK = 'Unlock';

    /**
     * Unna.
     */
    #[Label('Unna')]
    #[Description('Unna')]
    public const UNNA = 'Unna';

    /**
     * VT323.
     */
    #[Label('VT323')]
    #[Description('VT323')]
    public const VT323 = 'VT323';

    /**
     * Vampiro One.
     */
    #[Label('Vampiro One')]
    #[Description('Vampiro One')]
    public const VAMPIRO_ONE = 'Vampiro One';

    /**
     * Varela.
     */
    #[Label('Varela')]
    #[Description('Varela')]
    public const VARELA = 'Varela';

    /**
     * Varela Round.
     */
    #[Label('Varela Round')]
    #[Description('Varela Round')]
    public const VARELA_ROUND = 'Varela Round';

    /**
     * Vast Shadow.
     */
    #[Label('Vast Shadow')]
    #[Description('Vast Shadow')]
    public const VAST_SHADOW = 'Vast Shadow';

    /**
     * Vesper Libre.
     */
    #[Label('Vesper Libre')]
    #[Description('Vesper Libre')]
    public const VESPER_LIBRE = 'Vesper Libre';

    /**
     * Vibur.
     */
    #[Label('Vibur')]
    #[Description('Vibur')]
    public const VIBUR = 'Vibur';

    /**
     * Vidaloka.
     */
    #[Label('Vidaloka')]
    #[Description('Vidaloka')]
    public const VIDALOKA = 'Vidaloka';

    /**
     * Viga.
     */
    #[Label('Viga')]
    #[Description('Viga')]
    public const VIGA = 'Viga';

    /**
     * Voces.
     */
    #[Label('Voces')]
    #[Description('Voces')]
    public const VOCES = 'Voces';

    /**
     * Volkhov.
     */
    #[Label('Volkhov')]
    #[Description('Volkhov')]
    public const VOLKHOV = 'Volkhov';

    /**
     * Vollkorn.
     */
    #[Label('Vollkorn')]
    #[Description('Vollkorn')]
    public const VOLLKORN = 'Vollkorn';

    /**
     * Vollkorn SC.
     */
    #[Label('Vollkorn SC')]
    #[Description('Vollkorn SC')]
    public const VOLLKORN_SC = 'Vollkorn SC';

    /**
     * Voltaire.
     */
    #[Label('Voltaire')]
    #[Description('Voltaire')]
    public const VOLTAIRE = 'Voltaire';

    /**
     * Waiting for the Sunrise.
     */
    #[Label('Waiting for the Sunrise')]
    #[Description('Waiting for the Sunrise')]
    public const WAITING_FOR_THE_SUNRISE = 'Waiting for the Sunrise';

    /**
     * Wallpoet.
     */
    #[Label('Wallpoet')]
    #[Description('Wallpoet')]
    public const WALLPOET = 'Wallpoet';

    /**
     * Walter Turncoat.
     */
    #[Label('Walter Turncoat')]
    #[Description('Walter Turncoat')]
    public const WALTER_TURNCOAT = 'Walter Turncoat';

    /**
     * Warnes.
     */
    #[Label('Warnes')]
    #[Description('Warnes')]
    public const WARNES = 'Warnes';

    /**
     * Wellfleet.
     */
    #[Label('Wellfleet')]
    #[Description('Wellfleet')]
    public const WELLFLEET = 'Wellfleet';

    /**
     * Wendy One.
     */
    #[Label('Wendy One')]
    #[Description('Wendy One')]
    public const WENDY_ONE = 'Wendy One';

    /**
     * Wire One.
     */
    #[Label('Wire One')]
    #[Description('Wire One')]
    public const WIRE_ONE = 'Wire One';

    /**
     * Work Sans.
     */
    #[Label('Work Sans')]
    #[Description('Work Sans')]
    public const WORK_SANS = 'Work Sans';

    /**
     * Yanone Kaffeesatz.
     */
    #[Label('Yanone Kaffeesatz')]
    #[Description('Yanone Kaffeesatz')]
    public const YANONE_KAFFEESATZ = 'Yanone Kaffeesatz';

    /**
     * Yantramanav.
     */
    #[Label('Yantramanav')]
    #[Description('Yantramanav')]
    public const YANTRAMANAV = 'Yantramanav';

    /**
     * Yatra One.
     */
    #[Label('Yatra One')]
    #[Description('Yatra One')]
    public const YATRA_ONE = 'Yatra One';

    /**
     * Yellowtail.
     */
    #[Label('Yellowtail')]
    #[Description('Yellowtail')]
    public const YELLOWTAIL = 'Yellowtail';

    /**
     * Yeseva One.
     */
    #[Label('Yeseva One')]
    #[Description('Yeseva One')]
    public const YESEVA_ONE = 'Yeseva One';

    /**
     * Yesteryear.
     */
    #[Label('Yesteryear')]
    #[Description('Yesteryear')]
    public const YESTERYEAR = 'Yesteryear';

    /**
     * Yrsa.
     */
    #[Label('Yrsa')]
    #[Description('Yrsa')]
    public const YRSA = 'Yrsa';

    /**
     * Zeyada.
     */
    #[Label('Zeyada')]
    #[Description('Zeyada')]
    public const ZEYADA = 'Zeyada';

    /**
     * Zilla Slab.
     */
    #[Label('Zilla Slab')]
    #[Description('Zilla Slab')]
    public const ZILLA_SLAB = 'Zilla Slab';

    /**
     * Zilla Slab Highlight.
     */
    #[Label('Zilla Slab Highlight')]
    #[Description('Zilla Slab Highlight')]
    public const ZILLA_SLAB_HIGHLIGHT = 'Zilla Slab Highlight';
}
