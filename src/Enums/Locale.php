<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing locales.
 *
 * @enum {string}
 *
 * @method static self AF_NA() Afrikaans (Namibia)
 * @method static self AF_ZA() Afrikaans (South Africa)
 * @method static self AK() Akan
 * @method static self AK_GH() Akan (Ghana)
 * @method static self SQ_AL() Albanian (Albania)
 * @method static self SQ_XK() Albanian (Kosovo)
 * @method static self SQ_MK() Albanian (Macedonia)
 * @method static self AM_ET() Amharic (Ethiopia)
 * @method static self AR_DZ() Arabic (Algeria)
 * @method static self AR_BH() Arabic (Bahrain)
 * @method static self AR_TD() Arabic (Chad)
 * @method static self AR_KM() Arabic (Comoros)
 * @method static self AR_DJ() Arabic (Djibouti)
 * @method static self AR_EG() Arabic (Egypt)
 * @method static self AR_ER() Arabic (Eritrea)
 * @method static self AR_IQ() Arabic (Iraq)
 * @method static self AR_IL() Arabic (Israel)
 * @method static self AR_JO() Arabic (Jordan)
 * @method static self AR_KW() Arabic (Kuwait)
 * @method static self AR_LB() Arabic (Lebanon)
 * @method static self AR_LY() Arabic (Libya)
 * @method static self AR_MR() Arabic (Mauritania)
 * @method static self AR_MA() Arabic (Morocco)
 * @method static self AR_OM() Arabic (Oman)
 * @method static self AR_PS() Arabic (Palestinian Territories)
 * @method static self AR_QA() Arabic (Qatar)
 * @method static self AR_SA() Arabic (Saudi Arabia)
 * @method static self AR_SO() Arabic (Somalia)
 * @method static self AR_SS() Arabic (South Sudan)
 * @method static self AR_SD() Arabic (Sudan)
 * @method static self AR_SY() Arabic (Syria)
 * @method static self AR_TN() Arabic (Tunisia)
 * @method static self AR_AE() Arabic (United Arab Emirates)
 * @method static self AR_EH() Arabic (Western Sahara)
 * @method static self AR_YE() Arabic (Yemen)
 * @method static self HY_AM() Armenian (Armenia)
 * @method static self AS_IN() Assamese (India)
 * @method static self AZ_AZ() Azerbaijani (Azerbaijan)
 * @method static self AZ_CYRL_AZ() Azerbaijani (Cyrillic, Azerbaijan)
 * @method static self AZ_CYRL() Azerbaijani (Cyrillic)
 * @method static self AZ_LATN_AZ() Azerbaijani (Latin, Azerbaijan)
 * @method static self AZ_LATN() Azerbaijani (Latin)
 * @method static self BM() Bambara
 * @method static self BM_LATN_ML() Bambara (Latin, Mali)
 * @method static self BM_LATN() Bambara (Latin)
 * @method static self EU_ES() Basque (Spain)
 * @method static self BE_BY() Belarusian (Belarus)
 * @method static self BN_BD() Bengali (Bangladesh)
 * @method static self BN_IN() Bengali (India)
 * @method static self BS_BA() Bosnian (Bosnia & Herzegovina)
 * @method static self BS_CYRL_BA() Bosnian (Cyrillic, Bosnia & Herzegovina)
 * @method static self BS_CYRL() Bosnian (Cyrillic)
 * @method static self BS_LATN_BA() Bosnian (Latin, Bosnia & Herzegovina)
 * @method static self BS_LATN() Bosnian (Latin)
 * @method static self BR_FR() Breton (France)
 * @method static self BG_BG() Bulgarian (Bulgaria)
 * @method static self MY() Burmese
 * @method static self MY_MM() Burmese (Myanmar (Burma))
 * @method static self CA_AD() Catalan (Andorra)
 * @method static self CA_FR() Catalan (France)
 * @method static self CA_IT() Catalan (Italy)
 * @method static self CA_ES() Catalan (Spain)
 * @method static self ZH() Chinese
 * @method static self ZH_CN() Chinese (China)
 * @method static self ZH_HK() Chinese (Hong Kong SAR China)
 * @method static self ZH_MO() Chinese (Macau SAR China)
 * @method static self ZH_HANS_CN() Chinese (Simplified, China)
 * @method static self ZH_HANS_HK() Chinese (Simplified, Hong Kong SAR China)
 * @method static self ZH_HANS_MO() Chinese (Simplified, Macau SAR China)
 * @method static self ZH_HANS_SG() Chinese (Simplified, Singapore)
 * @method static self ZH_HANS() Chinese (Simplified)
 * @method static self ZH_SG() Chinese (Singapore)
 * @method static self ZH_TW() Chinese (Taiwan)
 * @method static self ZH_HANT_HK() Chinese (Traditional, Hong Kong SAR China)
 * @method static self ZH_HANT_MO() Chinese (Traditional, Macau SAR China)
 * @method static self ZH_HANT_TW() Chinese (Traditional, Taiwan)
 * @method static self ZH_HANT() Chinese (Traditional)
 * @method static self KW() Cornish
 * @method static self KW_GB() Cornish (United Kingdom)
 * @method static self HR_BA() Croatian (Bosnia & Herzegovina)
 * @method static self HR_HR() Croatian (Croatia)
 * @method static self CS_CZ() Czech (Czech Republic)
 * @method static self DA_DK() Danish (Denmark)
 * @method static self DA_GL() Danish (Greenland)
 * @method static self NL_AW() Dutch (Aruba)
 * @method static self NL_BE() Dutch (Belgium)
 * @method static self NL_BQ() Dutch (Caribbean Netherlands)
 * @method static self NL_CW() Dutch (Curaçao)
 * @method static self NL_NL() Dutch (Netherlands)
 * @method static self NL_SX() Dutch (Sint Maarten)
 * @method static self NL_SR() Dutch (Suriname)
 * @method static self DZ() Dzongkha
 * @method static self DZ_BT() Dzongkha (Bhutan)
 * @method static self EN_AS() English (American Samoa)
 * @method static self EN_AI() English (Anguilla)
 * @method static self EN_AG() English (Antigua & Barbuda)
 * @method static self EN_AU() English (Australia)
 * @method static self EN_BS() English (Bahamas)
 * @method static self EN_BB() English (Barbados)
 * @method static self EN_BE() English (Belgium)
 * @method static self EN_BZ() English (Belize)
 * @method static self EN_BM() English (Bermuda)
 * @method static self EN_BW() English (Botswana)
 * @method static self EN_IO() English (British Indian Ocean Territory)
 * @method static self EN_VG() English (British Virgin Islands)
 * @method static self EN_CM() English (Cameroon)
 * @method static self EN_CA() English (Canada)
 * @method static self EN_KY() English (Cayman Islands)
 * @method static self EN_CX() English (Christmas Island)
 * @method static self EN_CC() English (Cocos (Keeling) Islands)
 * @method static self EN_CK() English (Cook Islands)
 * @method static self EN_DG() English (Diego Garcia)
 * @method static self EN_DM() English (Dominica)
 * @method static self EN_ER() English (Eritrea)
 * @method static self EN_FK() English (Falkland Islands)
 * @method static self EN_FJ() English (Fiji)
 * @method static self EN_GM() English (Gambia)
 * @method static self EN_GH() English (Ghana)
 * @method static self EN_GI() English (Gibraltar)
 * @method static self EN_GD() English (Grenada)
 * @method static self EN_GU() English (Guam)
 * @method static self EN_GG() English (Guernsey)
 * @method static self EN_GY() English (Guyana)
 * @method static self EN_HK() English (Hong Kong SAR China)
 * @method static self EN_IN() English (India)
 * @method static self EN_IE() English (Ireland)
 * @method static self EN_IM() English (Isle of Man)
 * @method static self EN_JM() English (Jamaica)
 * @method static self EN_JE() English (Jersey)
 * @method static self EN_KE() English (Kenya)
 * @method static self EN_KI() English (Kiribati)
 * @method static self EN_LS() English (Lesotho)
 * @method static self EN_LR() English (Liberia)
 * @method static self EN_MO() English (Macau SAR China)
 * @method static self EN_MG() English (Madagascar)
 * @method static self EN_MW() English (Malawi)
 * @method static self EN_MY() English (Malaysia)
 * @method static self EN_MT() English (Malta)
 * @method static self EN_MH() English (Marshall Islands)
 * @method static self EN_MU() English (Mauritius)
 * @method static self EN_FM() English (Micronesia)
 * @method static self EN_MS() English (Montserrat)
 * @method static self EN_NA() English (Namibia)
 * @method static self EN_NR() English (Nauru)
 * @method static self EN_NZ() English (New Zealand)
 * @method static self EN_NG() English (Nigeria)
 * @method static self EN_NU() English (Niue)
 * @method static self EN_NF() English (Norfolk Island)
 * @method static self EN_MP() English (Northern Mariana Islands)
 * @method static self EN_PK() English (Pakistan)
 * @method static self EN_PW() English (Palau)
 * @method static self EN_PG() English (Papua New Guinea)
 * @method static self EN_PH() English (Philippines)
 * @method static self EN_PN() English (Pitcairn Islands)
 * @method static self EN_PR() English (Puerto Rico)
 * @method static self EN_WS() English (Samoa)
 * @method static self EN_SC() English (Seychelles)
 * @method static self EN_SL() English (Sierra Leone)
 * @method static self EN_SG() English (Singapore)
 * @method static self EN_SX() English (Sint Maarten)
 * @method static self EN_SB() English (Solomon Islands)
 * @method static self EN_ZA() English (South Africa)
 * @method static self EN_SS() English (South Sudan)
 * @method static self EN_SH() English (St. Helena)
 * @method static self EN_KN() English (St. Kitts & Nevis)
 * @method static self EN_LC() English (St. Lucia)
 * @method static self EN_VC() English (St. Vincent & Grenadines)
 * @method static self EN_SD() English (Sudan)
 * @method static self EN_SZ() English (Swaziland)
 * @method static self EN_TZ() English (Tanzania)
 * @method static self EN_TK() English (Tokelau)
 * @method static self EN_TT() English (Trinidad & Tobago)
 * @method static self EN_TC() English (Turks & Caicos Islands)
 * @method static self EN_TV() English (Tuvalu)
 * @method static self EN_UM() English (U.S. Outlying Islands)
 * @method static self EN_VI() English (U.S. Virgin Islands)
 * @method static self EN_UG() English (Uganda)
 * @method static self EN_GB() English (United Kingdom)
 * @method static self EN_US() English (United States)
 * @method static self EN_VU() English (Vanuatu)
 * @method static self EN_ZM() English (Zambia)
 * @method static self EN_ZW() English (Zimbabwe)
 * @method static self ET_EE() Estonian (Estonia)
 * @method static self EE() Ewe
 * @method static self EE_GH() Ewe (Ghana)
 * @method static self EE_TG() Ewe (Togo)
 * @method static self FO_FO() Faroese (Faroe Islands)
 * @method static self FI_FI() Finnish (Finland)
 * @method static self FR_DZ() French (Algeria)
 * @method static self FR_BE() French (Belgium)
 * @method static self FR_BJ() French (Benin)
 * @method static self FR_BF() French (Burkina Faso)
 * @method static self FR_BI() French (Burundi)
 * @method static self FR_CM() French (Cameroon)
 * @method static self FR_CA() French (Canada)
 * @method static self FR_CF() French (Central African Republic)
 * @method static self FR_TD() French (Chad)
 * @method static self FR_KM() French (Comoros)
 * @method static self FR_CG() French (Congo - Brazzaville)
 * @method static self FR_CD() French (Congo - Kinshasa)
 * @method static self FR_CI() French (Côte d’Ivoire)
 * @method static self FR_DJ() French (Djibouti)
 * @method static self FR_GQ() French (Equatorial Guinea)
 * @method static self FR_FR() French (France)
 * @method static self FR_GF() French (French Guiana)
 * @method static self FR_PF() French (French Polynesia)
 * @method static self FR_GA() French (Gabon)
 * @method static self FR_GP() French (Guadeloupe)
 * @method static self FR_GN() French (Guinea)
 * @method static self FR_HT() French (Haiti)
 * @method static self FR_LU() French (Luxembourg)
 * @method static self FR_MG() French (Madagascar)
 * @method static self FR_ML() French (Mali)
 * @method static self FR_MQ() French (Martinique)
 * @method static self FR_MR() French (Mauritania)
 * @method static self FR_MU() French (Mauritius)
 * @method static self FR_YT() French (Mayotte)
 * @method static self FR_MC() French (Monaco)
 * @method static self FR_MA() French (Morocco)
 * @method static self FR_NC() French (New Caledonia)
 * @method static self FR_NE() French (Niger)
 * @method static self FR_RE() French (Réunion)
 * @method static self FR_SN() French (Senegal)
 * @method static self FR_SC() French (Seychelles)
 * @method static self FR_BL() French (St. Barthélemy)
 * @method static self FR_MF() French (St. Martin)
 * @method static self FR_PM() French (St. Pierre & Miquelon)
 * @method static self FR_CH() French (Switzerland)
 * @method static self FR_SY() French (Syria)
 * @method static self FR_TG() French (Togo)
 * @method static self FR_TN() French (Tunisia)
 * @method static self FR_VU() French (Vanuatu)
 * @method static self FR_WF() French (Wallis & Futuna)
 * @method static self FF() Fulah
 * @method static self FF_CM() Fulah (Cameroon)
 * @method static self FF_GN() Fulah (Guinea)
 * @method static self FF_MR() Fulah (Mauritania)
 * @method static self FF_SN() Fulah (Senegal)
 * @method static self GL_ES() Galician (Spain)
 * @method static self LG() Ganda
 * @method static self LG_UG() Ganda (Uganda)
 * @method static self KA_GE() Georgian (Georgia)
 * @method static self DE_AT() German (Austria)
 * @method static self DE_BE() German (Belgium)
 * @method static self DE_DE() German (Germany)
 * @method static self DE_LI() German (Liechtenstein)
 * @method static self DE_LU() German (Luxembourg)
 * @method static self DE_CH() German (Switzerland)
 * @method static self EL_CY() Greek (Cyprus)
 * @method static self EL_GR() Greek (Greece)
 * @method static self GU_IN() Gujarati (India)
 * @method static self HA() Hausa
 * @method static self HA_GH() Hausa (Ghana)
 * @method static self HA_LATN_GH() Hausa (Latin, Ghana)
 * @method static self HA_LATN_NE() Hausa (Latin, Niger)
 * @method static self HA_LATN_NG() Hausa (Latin, Nigeria)
 * @method static self HA_LATN() Hausa (Latin)
 * @method static self HA_NE() Hausa (Niger)
 * @method static self HA_NG() Hausa (Nigeria)
 * @method static self HE_IL() Hebrew (Israel)
 * @method static self HI_IN() Hindi (India)
 * @method static self HU_HU() Hungarian (Hungary)
 * @method static self IS_IS() Icelandic (Iceland)
 * @method static self SQ() Icyalubaniya
 * @method static self AR() Icyarabu
 * @method static self AS() Icyasamizi
 * @method static self ES() Icyesipanyolo
 * @method static self EO() Icyesiperanto
 * @method static self ET() Icyesitoniya
 * @method static self EN() Icyongereza
 * @method static self EN_TO() Icyongereza (Igitonga)
 * @method static self EN_RW() Icyongereza (Rwanda)
 * @method static self IG() Igbo
 * @method static self IG_NG() Igbo (Nigeria)
 * @method static self CS() Igiceke
 * @method static self FR() Igifaransa
 * @method static self FR_RW() Igifaransa (Rwanda)
 * @method static self FI() Igifinilande
 * @method static self FY() Igifiriziyani
 * @method static self HE() Igiheburayo
 * @method static self HI() Igihindi
 * @method static self HU() Igihongiriya
 * @method static self KM() Igikambodiya
 * @method static self KN() Igikanada
 * @method static self CA() Igikatalani
 * @method static self KO() Igikoreya
 * @method static self HR() Igikorowasiya
 * @method static self PL() Igipolone
 * @method static self PT() Igiporutugali
 * @method static self PA() Igipunjabi
 * @method static self SR() Igiseribe
 * @method static self IS() Igisilande
 * @method static self SK() Igisilovaki
 * @method static self SO() Igisomali
 * @method static self SV() Igisuweduwa
 * @method static self SW() Igiswahili
 * @method static self IT() Igitaliyani
 * @method static self TA() Igitamili
 * @method static self TH() Igitayi
 * @method static self TE() Igitelugu
 * @method static self TR() Igiturukiya
 * @method static self EU() Ikibasiki
 * @method static self BE() Ikibelarusiya
 * @method static self BN() Ikibengali
 * @method static self DE() Ikidage
 * @method static self DA() Ikidaninwa
 * @method static self GL() Ikigalisiya
 * @method static self CY() Ikigaluwa
 * @method static self GD() Ikigaluwa cy’Igisweduwa
 * @method static self EL() Ikigereki
 * @method static self LO() Ikilawotiyani
 * @method static self LT() Ikilituwaniya
 * @method static self ML() Ikimalayalami
 * @method static self MS() Ikimalayi
 * @method static self MT() Ikimaliteze
 * @method static self MR() Ikimarati
 * @method static self MK() Ikimasedoniyani
 * @method static self MN() Ikimongoli
 * @method static self NE() Ikinepali
 * @method static self NL() Ikinerilande
 * @method static self NO() Ikinoruveji
 * @method static self AF() Ikinyafurikaneri
 * @method static self LV() Ikinyaletoviyani
 * @method static self RO() Ikinyarumaniya
 * @method static self HY() Ikinyarumeniya
 * @method static self SL() Ikinyasiloveniya
 * @method static self VI() Ikinyaviyetinamu
 * @method static self UK() Ikinyayukereni
 * @method static self ID() Ikinyendoziya
 * @method static self GA() Ikirilandi
 * @method static self RU() Ikirusiya
 * @method static self UG() Ikiwiguri
 * @method static self JA() Ikiyapani
 * @method static self LN() Ilingala
 * @method static self PS() Impashito
 * @method static self ID_ID() Indonesian (Indonesia)
 * @method static self KY() Inkerigizi
 * @method static self AM() Inyamuhariki
 * @method static self TI() Inyatigirinya
 * @method static self AZ() Inyazeribayijani
 * @method static self BR() Inyebiritoni
 * @method static self BS() Inyebosiniya
 * @method static self FO() Inyefaroyizi
 * @method static self GU() Inyegujarati
 * @method static self KA() Inyejeworujiya
 * @method static self NN() Inyenoruveji (Nyonorusiki)
 * @method static self FA() Inyeperisi
 * @method static self SH() Inyeseribiya na Korowasiya
 * @method static self SI() Inyesimpaleze
 * @method static self YI() Inyeyidishi
 * @method static self UR() Inyeyurudu
 * @method static self UZ() Inyeyuzubeki
 * @method static self ZU() Inyezulu
 * @method static self OR() Inyoriya
 * @method static self GA_IE() Irish (Ireland)
 * @method static self IT_IT() Italian (Italy)
 * @method static self IT_SM() Italian (San Marino)
 * @method static self IT_CH() Italian (Switzerland)
 * @method static self JA_JP() Japanese (Japan)
 * @method static self KL() Kalaallisut
 * @method static self KL_GL() Kalaallisut (Greenland)
 * @method static self KN_IN() Kannada (India)
 * @method static self KS() Kashmiri
 * @method static self KS_ARAB_IN() Kashmiri (Arabic, India)
 * @method static self KS_ARAB() Kashmiri (Arabic)
 * @method static self KS_IN() Kashmiri (India)
 * @method static self KK() Kazakh
 * @method static self KK_CYRL_KZ() Kazakh (Cyrillic, Kazakhstan)
 * @method static self KK_CYRL() Kazakh (Cyrillic)
 * @method static self KK_KZ() Kazakh (Kazakhstan)
 * @method static self KM_KH() Khmer (Cambodia)
 * @method static self KI() Kikuyu
 * @method static self KI_KE() Kikuyu (Kenya)
 * @method static self RW() Kinyarwanda
 * @method static self RW_RW() Kinyarwanda (Rwanda)
 * @method static self KO_KP() Korean (North Korea)
 * @method static self KO_KR() Korean (South Korea)
 * @method static self KY_CYRL_KG() Kyrgyz (Cyrillic, Kyrgyzstan)
 * @method static self KY_CYRL() Kyrgyz (Cyrillic)
 * @method static self KY_KG() Kyrgyz (Kyrgyzstan)
 * @method static self LO_LA() Lao (Laos)
 * @method static self LV_LV() Latvian (Latvia)
 * @method static self LN_AO() Lingala (Angola)
 * @method static self LN_CF() Lingala (Central African Republic)
 * @method static self LN_CG() Lingala (Congo - Brazzaville)
 * @method static self LN_CD() Lingala (Congo - Kinshasa)
 * @method static self LT_LT() Lithuanian (Lithuania)
 * @method static self LU() Luba-Katanga
 * @method static self LU_CD() Luba-Katanga (Congo - Kinshasa)
 * @method static self LB() Luxembourgish
 * @method static self LB_LU() Luxembourgish (Luxembourg)
 * @method static self MK_MK() Macedonian (Macedonia)
 * @method static self MG() Malagasy
 * @method static self MG_MG() Malagasy (Madagascar)
 * @method static self MS_BN() Malay (Brunei)
 * @method static self MS_LATN_BN() Malay (Latin, Brunei)
 * @method static self MS_LATN_MY() Malay (Latin, Malaysia)
 * @method static self MS_LATN_SG() Malay (Latin, Singapore)
 * @method static self MS_LATN() Malay (Latin)
 * @method static self MS_MY() Malay (Malaysia)
 * @method static self MS_SG() Malay (Singapore)
 * @method static self ML_IN() Malayalam (India)
 * @method static self MT_MT() Maltese (Malta)
 * @method static self GV() Manx
 * @method static self GV_IM() Manx (Isle of Man)
 * @method static self MR_IN() Marathi (India)
 * @method static self MN_CYRL_MN() Mongolian (Cyrillic, Mongolia)
 * @method static self MN_CYRL() Mongolian (Cyrillic)
 * @method static self MN_MN() Mongolian (Mongolia)
 * @method static self NE_IN() Nepali (India)
 * @method static self NE_NP() Nepali (Nepal)
 * @method static self ND() North Ndebele
 * @method static self ND_ZW() North Ndebele (Zimbabwe)
 * @method static self SE() Northern Sami
 * @method static self SE_FI() Northern Sami (Finland)
 * @method static self SE_NO() Northern Sami (Norway)
 * @method static self SE_SE() Northern Sami (Sweden)
 * @method static self NO_NO() Norwegian (Norway)
 * @method static self NB() Norwegian Bokmål
 * @method static self NB_NO() Norwegian Bokmål (Norway)
 * @method static self NB_SJ() Norwegian Bokmål (Svalbard & Jan Mayen)
 * @method static self NN_NO() Norwegian Nynorsk (Norway)
 * @method static self OR_IN() Oriya (India)
 * @method static self OM() Oromo
 * @method static self OM_ET() Oromo (Ethiopia)
 * @method static self OM_KE() Oromo (Kenya)
 * @method static self OS() Ossetic
 * @method static self OS_GE() Ossetic (Georgia)
 * @method static self OS_RU() Ossetic (Russia)
 * @method static self PS_AF() Pashto (Afghanistan)
 * @method static self FA_AF() Persian (Afghanistan)
 * @method static self FA_IR() Persian (Iran)
 * @method static self PL_PL() Polish (Poland)
 * @method static self PT_AO() Portuguese (Angola)
 * @method static self PT_BR() Portuguese (Brazil)
 * @method static self PT_CV() Portuguese (Cape Verde)
 * @method static self PT_GW() Portuguese (Guinea-Bissau)
 * @method static self PT_MO() Portuguese (Macau SAR China)
 * @method static self PT_MZ() Portuguese (Mozambique)
 * @method static self PT_PT() Portuguese (Portugal)
 * @method static self PT_ST() Portuguese (São Tomé & Príncipe)
 * @method static self PT_TL() Portuguese (Timor-Leste)
 * @method static self PA_ARAB_PK() Punjabi (Arabic, Pakistan)
 * @method static self PA_ARAB() Punjabi (Arabic)
 * @method static self PA_GURU_IN() Punjabi (Gurmukhi, India)
 * @method static self PA_GURU() Punjabi (Gurmukhi)
 * @method static self PA_IN() Punjabi (India)
 * @method static self PA_PK() Punjabi (Pakistan)
 * @method static self QU() Quechua
 * @method static self QU_BO() Quechua (Bolivia)
 * @method static self QU_EC() Quechua (Ecuador)
 * @method static self QU_PE() Quechua (Peru)
 * @method static self RO_MD() Romanian (Moldova)
 * @method static self RO_RO() Romanian (Romania)
 * @method static self RM() Romansh
 * @method static self RM_CH() Romansh (Switzerland)
 * @method static self RN() Rundi
 * @method static self RN_BI() Rundi (Burundi)
 * @method static self RU_BY() Russian (Belarus)
 * @method static self RU_KZ() Russian (Kazakhstan)
 * @method static self RU_KG() Russian (Kyrgyzstan)
 * @method static self RU_MD() Russian (Moldova)
 * @method static self RU_RU() Russian (Russia)
 * @method static self RU_UA() Russian (Ukraine)
 * @method static self SG() Sango
 * @method static self SG_CF() Sango (Central African Republic)
 * @method static self GD_GB() Scottish Gaelic (United Kingdom)
 * @method static self SR_BA() Serbian (Bosnia & Herzegovina)
 * @method static self SR_CYRL_BA() Serbian (Cyrillic, Bosnia & Herzegovina)
 * @method static self SR_CYRL_XK() Serbian (Cyrillic, Kosovo)
 * @method static self SR_CYRL_ME() Serbian (Cyrillic, Montenegro)
 * @method static self SR_CYRL_RS() Serbian (Cyrillic, Serbia)
 * @method static self SR_CYRL() Serbian (Cyrillic)
 * @method static self SR_XK() Serbian (Kosovo)
 * @method static self SR_LATN_BA() Serbian (Latin, Bosnia & Herzegovina)
 * @method static self SR_LATN_XK() Serbian (Latin, Kosovo)
 * @method static self SR_LATN_ME() Serbian (Latin, Montenegro)
 * @method static self SR_LATN_RS() Serbian (Latin, Serbia)
 * @method static self SR_LATN() Serbian (Latin)
 * @method static self SR_ME() Serbian (Montenegro)
 * @method static self SR_RS() Serbian (Serbia)
 * @method static self SH_BA() Serbo-Croatian (Bosnia & Herzegovina)
 * @method static self SN() Shona
 * @method static self SN_ZW() Shona (Zimbabwe)
 * @method static self II() Sichuan Yi
 * @method static self II_CN() Sichuan Yi (China)
 * @method static self SI_LK() Sinhala (Sri Lanka)
 * @method static self SK_SK() Slovak (Slovakia)
 * @method static self SL_SI() Slovenian (Slovenia)
 * @method static self SO_DJ() Somali (Djibouti)
 * @method static self SO_ET() Somali (Ethiopia)
 * @method static self SO_KE() Somali (Kenya)
 * @method static self SO_SO() Somali (Somalia)
 * @method static self ES_AR() Spanish (Argentina)
 * @method static self ES_BO() Spanish (Bolivia)
 * @method static self ES_IC() Spanish (Canary Islands)
 * @method static self ES_EA() Spanish (Ceuta & Melilla)
 * @method static self ES_CL() Spanish (Chile)
 * @method static self ES_CO() Spanish (Colombia)
 * @method static self ES_CR() Spanish (Costa Rica)
 * @method static self ES_CU() Spanish (Cuba)
 * @method static self ES_DO() Spanish (Dominican Republic)
 * @method static self ES_EC() Spanish (Ecuador)
 * @method static self ES_SV() Spanish (El Salvador)
 * @method static self ES_GQ() Spanish (Equatorial Guinea)
 * @method static self ES_GT() Spanish (Guatemala)
 * @method static self ES_HN() Spanish (Honduras)
 * @method static self ES_MX() Spanish (Mexico)
 * @method static self ES_NI() Spanish (Nicaragua)
 * @method static self ES_PA() Spanish (Panama)
 * @method static self ES_PY() Spanish (Paraguay)
 * @method static self ES_PE() Spanish (Peru)
 * @method static self ES_PH() Spanish (Philippines)
 * @method static self ES_PR() Spanish (Puerto Rico)
 * @method static self ES_ES() Spanish (Spain)
 * @method static self ES_US() Spanish (United States)
 * @method static self ES_UY() Spanish (Uruguay)
 * @method static self ES_VE() Spanish (Venezuela)
 * @method static self SW_KE() Swahili (Kenya)
 * @method static self SW_TZ() Swahili (Tanzania)
 * @method static self SW_UG() Swahili (Uganda)
 * @method static self SV_AX() Swedish (Åland Islands)
 * @method static self SV_FI() Swedish (Finland)
 * @method static self SV_SE() Swedish (Sweden)
 * @method static self TL() Tagalog
 * @method static self TL_PH() Tagalog (Philippines)
 * @method static self TA_IN() Tamil (India)
 * @method static self TA_MY() Tamil (Malaysia)
 * @method static self TA_SG() Tamil (Singapore)
 * @method static self TA_LK() Tamil (Sri Lanka)
 * @method static self TE_IN() Telugu (India)
 * @method static self TH_TH() Thai (Thailand)
 * @method static self BO() Tibetan
 * @method static self BO_CN() Tibetan (China)
 * @method static self BO_IN() Tibetan (India)
 * @method static self TI_ER() Tigrinya (Eritrea)
 * @method static self TI_ET() Tigrinya (Ethiopia)
 * @method static self TO() Tongan
 * @method static self TO_TO() Tongan (Tonga)
 * @method static self TR_CY() Turkish (Cyprus)
 * @method static self TR_TR() Turkish (Turkey)
 * @method static self UK_UA() Ukrainian (Ukraine)
 * @method static self UR_IN() Urdu (India)
 * @method static self UR_PK() Urdu (Pakistan)
 * @method static self BG() Urunyabuligariya
 * @method static self UG_ARAB_CN() Uyghur (Arabic, China)
 * @method static self UG_ARAB() Uyghur (Arabic)
 * @method static self UG_CN() Uyghur (China)
 * @method static self UZ_AF() Uzbek (Afghanistan)
 * @method static self UZ_ARAB_AF() Uzbek (Arabic, Afghanistan)
 * @method static self UZ_ARAB() Uzbek (Arabic)
 * @method static self UZ_CYRL_UZ() Uzbek (Cyrillic, Uzbekistan)
 * @method static self UZ_CYRL() Uzbek (Cyrillic)
 * @method static self UZ_LATN_UZ() Uzbek (Latin, Uzbekistan)
 * @method static self UZ_LATN() Uzbek (Latin)
 * @method static self UZ_UZ() Uzbek (Uzbekistan)
 * @method static self VI_VN() Vietnamese (Vietnam)
 * @method static self CY_GB() Welsh (United Kingdom)
 * @method static self FY_NL() Western Frisian (Netherlands)
 * @method static self YO() Yoruba
 * @method static self YO_BJ() Yoruba (Benin)
 * @method static self YO_NG() Yoruba (Nigeria)
 * @method static self ZU_ZA() Zulu (South Africa)
 */
class Locale extends Enum
{
    /**
     * Afrikaans (Namibia).
     */
    #[Label('Afrikaans (Namibia)')]
    public const AF_NA = 'af_NA';

    /**
     * Afrikaans (South Africa).
     */
    #[Label('Afrikaans (South Africa)')]
    public const AF_ZA = 'af_ZA';

    /**
     * Akan.
     */
    #[Label('Akan')]
    public const AK = 'ak';

    /**
     * Akan (Ghana).
     */
    #[Label('Akan (Ghana)')]
    public const AK_GH = 'ak_GH';

    /**
     * Albanian (Albania).
     */
    #[Label('Albanian (Albania)')]
    public const SQ_AL = 'sq_AL';

    /**
     * Albanian (Kosovo).
     */
    #[Label('Albanian (Kosovo)')]
    public const SQ_XK = 'sq_XK';

    /**
     * Albanian (Macedonia).
     */
    #[Label('Albanian (Macedonia)')]
    public const SQ_MK = 'sq_MK';

    /**
     * Amharic (Ethiopia).
     */
    #[Label('Amharic (Ethiopia)')]
    public const AM_ET = 'am_ET';

    /**
     * Arabic (Algeria).
     */
    #[Label('Arabic (Algeria)')]
    public const AR_DZ = 'ar_DZ';

    /**
     * Arabic (Bahrain).
     */
    #[Label('Arabic (Bahrain)')]
    public const AR_BH = 'ar_BH';

    /**
     * Arabic (Chad).
     */
    #[Label('Arabic (Chad)')]
    public const AR_TD = 'ar_TD';

    /**
     * Arabic (Comoros).
     */
    #[Label('Arabic (Comoros)')]
    public const AR_KM = 'ar_KM';

    /**
     * Arabic (Djibouti).
     */
    #[Label('Arabic (Djibouti)')]
    public const AR_DJ = 'ar_DJ';

    /**
     * Arabic (Egypt).
     */
    #[Label('Arabic (Egypt)')]
    public const AR_EG = 'ar_EG';

    /**
     * Arabic (Eritrea).
     */
    #[Label('Arabic (Eritrea)')]
    public const AR_ER = 'ar_ER';

    /**
     * Arabic (Iraq).
     */
    #[Label('Arabic (Iraq)')]
    public const AR_IQ = 'ar_IQ';

    /**
     * Arabic (Israel).
     */
    #[Label('Arabic (Israel)')]
    public const AR_IL = 'ar_IL';

    /**
     * Arabic (Jordan).
     */
    #[Label('Arabic (Jordan)')]
    public const AR_JO = 'ar_JO';

    /**
     * Arabic (Kuwait).
     */
    #[Label('Arabic (Kuwait)')]
    public const AR_KW = 'ar_KW';

    /**
     * Arabic (Lebanon).
     */
    #[Label('Arabic (Lebanon)')]
    public const AR_LB = 'ar_LB';

    /**
     * Arabic (Libya).
     */
    #[Label('Arabic (Libya)')]
    public const AR_LY = 'ar_LY';

    /**
     * Arabic (Mauritania).
     */
    #[Label('Arabic (Mauritania)')]
    public const AR_MR = 'ar_MR';

    /**
     * Arabic (Morocco).
     */
    #[Label('Arabic (Morocco)')]
    public const AR_MA = 'ar_MA';

    /**
     * Arabic (Oman).
     */
    #[Label('Arabic (Oman)')]
    public const AR_OM = 'ar_OM';

    /**
     * Arabic (Palestinian Territories).
     */
    #[Label('Arabic (Palestinian Territories)')]
    public const AR_PS = 'ar_PS';

    /**
     * Arabic (Qatar).
     */
    #[Label('Arabic (Qatar)')]
    public const AR_QA = 'ar_QA';

    /**
     * Arabic (Saudi Arabia).
     */
    #[Label('Arabic (Saudi Arabia)')]
    public const AR_SA = 'ar_SA';

    /**
     * Arabic (Somalia).
     */
    #[Label('Arabic (Somalia)')]
    public const AR_SO = 'ar_SO';

    /**
     * Arabic (South Sudan).
     */
    #[Label('Arabic (South Sudan)')]
    public const AR_SS = 'ar_SS';

    /**
     * Arabic (Sudan).
     */
    #[Label('Arabic (Sudan)')]
    public const AR_SD = 'ar_SD';

    /**
     * Arabic (Syria).
     */
    #[Label('Arabic (Syria)')]
    public const AR_SY = 'ar_SY';

    /**
     * Arabic (Tunisia).
     */
    #[Label('Arabic (Tunisia)')]
    public const AR_TN = 'ar_TN';

    /**
     * Arabic (United Arab Emirates).
     */
    #[Label('Arabic (United Arab Emirates)')]
    public const AR_AE = 'ar_AE';

    /**
     * Arabic (Western Sahara).
     */
    #[Label('Arabic (Western Sahara)')]
    public const AR_EH = 'ar_EH';

    /**
     * Arabic (Yemen).
     */
    #[Label('Arabic (Yemen)')]
    public const AR_YE = 'ar_YE';

    /**
     * Armenian (Armenia).
     */
    #[Label('Armenian (Armenia)')]
    public const HY_AM = 'hy_AM';

    /**
     * Assamese (India).
     */
    #[Label('Assamese (India)')]
    public const AS_IN = 'as_IN';

    /**
     * Azerbaijani (Azerbaijan).
     */
    #[Label('Azerbaijani (Azerbaijan)')]
    public const AZ_AZ = 'az_AZ';

    /**
     * Azerbaijani (Cyrillic, Azerbaijan).
     */
    #[Label('Azerbaijani (Cyrillic, Azerbaijan)')]
    public const AZ_CYRL_AZ = 'az_Cyrl_AZ';

    /**
     * Azerbaijani (Cyrillic).
     */
    #[Label('Azerbaijani (Cyrillic)')]
    public const AZ_CYRL = 'az_Cyrl';

    /**
     * Azerbaijani (Latin, Azerbaijan).
     */
    #[Label('Azerbaijani (Latin, Azerbaijan)')]
    public const AZ_LATN_AZ = 'az_Latn_AZ';

    /**
     * Azerbaijani (Latin).
     */
    #[Label('Azerbaijani (Latin)')]
    public const AZ_LATN = 'az_Latn';

    /**
     * Bambara.
     */
    #[Label('Bambara')]
    public const BM = 'bm';

    /**
     * Bambara (Latin, Mali).
     */
    #[Label('Bambara (Latin, Mali)')]
    public const BM_LATN_ML = 'bm_Latn_ML';

    /**
     * Bambara (Latin).
     */
    #[Label('Bambara (Latin)')]
    public const BM_LATN = 'bm_Latn';

    /**
     * Basque (Spain).
     */
    #[Label('Basque (Spain)')]
    public const EU_ES = 'eu_ES';

    /**
     * Belarusian (Belarus).
     */
    #[Label('Belarusian (Belarus)')]
    public const BE_BY = 'be_BY';

    /**
     * Bengali (Bangladesh).
     */
    #[Label('Bengali (Bangladesh)')]
    public const BN_BD = 'bn_BD';

    /**
     * Bengali (India).
     */
    #[Label('Bengali (India)')]
    public const BN_IN = 'bn_IN';

    /**
     * Bosnian (Bosnia & Herzegovina).
     */
    #[Label('Bosnian (Bosnia & Herzegovina)')]
    public const BS_BA = 'bs_BA';

    /**
     * Bosnian (Cyrillic, Bosnia & Herzegovina).
     */
    #[Label('Bosnian (Cyrillic, Bosnia & Herzegovina)')]
    public const BS_CYRL_BA = 'bs_Cyrl_BA';

    /**
     * Bosnian (Cyrillic).
     */
    #[Label('Bosnian (Cyrillic)')]
    public const BS_CYRL = 'bs_Cyrl';

    /**
     * Bosnian (Latin, Bosnia & Herzegovina).
     */
    #[Label('Bosnian (Latin, Bosnia & Herzegovina)')]
    public const BS_LATN_BA = 'bs_Latn_BA';

    /**
     * Bosnian (Latin).
     */
    #[Label('Bosnian (Latin)')]
    public const BS_LATN = 'bs_Latn';

    /**
     * Breton (France).
     */
    #[Label('Breton (France)')]
    public const BR_FR = 'br_FR';

    /**
     * Bulgarian (Bulgaria).
     */
    #[Label('Bulgarian (Bulgaria)')]
    public const BG_BG = 'bg_BG';

    /**
     * Burmese.
     */
    #[Label('Burmese')]
    public const MY = 'my';

    /**
     * Burmese (Myanmar (Burma)).
     */
    #[Label('Burmese (Myanmar (Burma))')]
    public const MY_MM = 'my_MM';

    /**
     * Catalan (Andorra).
     */
    #[Label('Catalan (Andorra)')]
    public const CA_AD = 'ca_AD';

    /**
     * Catalan (France).
     */
    #[Label('Catalan (France)')]
    public const CA_FR = 'ca_FR';

    /**
     * Catalan (Italy).
     */
    #[Label('Catalan (Italy)')]
    public const CA_IT = 'ca_IT';

    /**
     * Catalan (Spain).
     */
    #[Label('Catalan (Spain)')]
    public const CA_ES = 'ca_ES';

    /**
     * Chinese.
     */
    #[Label('Chinese')]
    public const ZH = 'zh';

    /**
     * Chinese (China).
     */
    #[Label('Chinese (China)')]
    public const ZH_CN = 'zh_CN';

    /**
     * Chinese (Hong Kong SAR China).
     */
    #[Label('Chinese (Hong Kong SAR China)')]
    public const ZH_HK = 'zh_HK';

    /**
     * Chinese (Macau SAR China).
     */
    #[Label('Chinese (Macau SAR China)')]
    public const ZH_MO = 'zh_MO';

    /**
     * Chinese (Simplified, China).
     */
    #[Label('Chinese (Simplified, China)')]
    public const ZH_HANS_CN = 'zh_Hans_CN';

    /**
     * Chinese (Simplified, Hong Kong SAR China).
     */
    #[Label('Chinese (Simplified, Hong Kong SAR China)')]
    public const ZH_HANS_HK = 'zh_Hans_HK';

    /**
     * Chinese (Simplified, Macau SAR China).
     */
    #[Label('Chinese (Simplified, Macau SAR China)')]
    public const ZH_HANS_MO = 'zh_Hans_MO';

    /**
     * Chinese (Simplified, Singapore).
     */
    #[Label('Chinese (Simplified, Singapore)')]
    public const ZH_HANS_SG = 'zh_Hans_SG';

    /**
     * Chinese (Simplified).
     */
    #[Label('Chinese (Simplified)')]
    public const ZH_HANS = 'zh_Hans';

    /**
     * Chinese (Singapore).
     */
    #[Label('Chinese (Singapore)')]
    public const ZH_SG = 'zh_SG';

    /**
     * Chinese (Taiwan).
     */
    #[Label('Chinese (Taiwan)')]
    public const ZH_TW = 'zh_TW';

    /**
     * Chinese (Traditional, Hong Kong SAR China).
     */
    #[Label('Chinese (Traditional, Hong Kong SAR China)')]
    public const ZH_HANT_HK = 'zh_Hant_HK';

    /**
     * Chinese (Traditional, Macau SAR China).
     */
    #[Label('Chinese (Traditional, Macau SAR China)')]
    public const ZH_HANT_MO = 'zh_Hant_MO';

    /**
     * Chinese (Traditional, Taiwan).
     */
    #[Label('Chinese (Traditional, Taiwan)')]
    public const ZH_HANT_TW = 'zh_Hant_TW';

    /**
     * Chinese (Traditional).
     */
    #[Label('Chinese (Traditional)')]
    public const ZH_HANT = 'zh_Hant';

    /**
     * Cornish.
     */
    #[Label('Cornish')]
    public const KW = 'kw';

    /**
     * Cornish (United Kingdom).
     */
    #[Label('Cornish (United Kingdom)')]
    public const KW_GB = 'kw_GB';

    /**
     * Croatian (Bosnia & Herzegovina).
     */
    #[Label('Croatian (Bosnia & Herzegovina)')]
    public const HR_BA = 'hr_BA';

    /**
     * Croatian (Croatia).
     */
    #[Label('Croatian (Croatia)')]
    public const HR_HR = 'hr_HR';

    /**
     * Czech (Czech Republic).
     */
    #[Label('Czech (Czech Republic)')]
    public const CS_CZ = 'cs_CZ';

    /**
     * Danish (Denmark).
     */
    #[Label('Danish (Denmark)')]
    public const DA_DK = 'da_DK';

    /**
     * Danish (Greenland).
     */
    #[Label('Danish (Greenland)')]
    public const DA_GL = 'da_GL';

    /**
     * Dutch (Aruba).
     */
    #[Label('Dutch (Aruba)')]
    public const NL_AW = 'nl_AW';

    /**
     * Dutch (Belgium).
     */
    #[Label('Dutch (Belgium)')]
    public const NL_BE = 'nl_BE';

    /**
     * Dutch (Caribbean Netherlands).
     */
    #[Label('Dutch (Caribbean Netherlands)')]
    public const NL_BQ = 'nl_BQ';

    /**
     * Dutch (Curaçao).
     */
    #[Label('Dutch (Curaçao)')]
    public const NL_CW = 'nl_CW';

    /**
     * Dutch (Netherlands).
     */
    #[Label('Dutch (Netherlands)')]
    public const NL_NL = 'nl_NL';

    /**
     * Dutch (Sint Maarten).
     */
    #[Label('Dutch (Sint Maarten)')]
    public const NL_SX = 'nl_SX';

    /**
     * Dutch (Suriname).
     */
    #[Label('Dutch (Suriname)')]
    public const NL_SR = 'nl_SR';

    /**
     * Dzongkha.
     */
    #[Label('Dzongkha')]
    public const DZ = 'dz';

    /**
     * Dzongkha (Bhutan).
     */
    #[Label('Dzongkha (Bhutan)')]
    public const DZ_BT = 'dz_BT';

    /**
     * English (American Samoa).
     */
    #[Label('English (American Samoa)')]
    public const EN_AS = 'en_AS';

    /**
     * English (Anguilla).
     */
    #[Label('English (Anguilla)')]
    public const EN_AI = 'en_AI';

    /**
     * English (Antigua & Barbuda).
     */
    #[Label('English (Antigua & Barbuda)')]
    public const EN_AG = 'en_AG';

    /**
     * English (Australia).
     */
    #[Label('English (Australia)')]
    public const EN_AU = 'en_AU';

    /**
     * English (Bahamas).
     */
    #[Label('English (Bahamas)')]
    public const EN_BS = 'en_BS';

    /**
     * English (Barbados).
     */
    #[Label('English (Barbados)')]
    public const EN_BB = 'en_BB';

    /**
     * English (Belgium).
     */
    #[Label('English (Belgium)')]
    public const EN_BE = 'en_BE';

    /**
     * English (Belize).
     */
    #[Label('English (Belize)')]
    public const EN_BZ = 'en_BZ';

    /**
     * English (Bermuda).
     */
    #[Label('English (Bermuda)')]
    public const EN_BM = 'en_BM';

    /**
     * English (Botswana).
     */
    #[Label('English (Botswana)')]
    public const EN_BW = 'en_BW';

    /**
     * English (British Indian Ocean Territory).
     */
    #[Label('English (British Indian Ocean Territory)')]
    public const EN_IO = 'en_IO';

    /**
     * English (British Virgin Islands).
     */
    #[Label('English (British Virgin Islands)')]
    public const EN_VG = 'en_VG';

    /**
     * English (Cameroon).
     */
    #[Label('English (Cameroon)')]
    public const EN_CM = 'en_CM';

    /**
     * English (Canada).
     */
    #[Label('English (Canada)')]
    public const EN_CA = 'en_CA';

    /**
     * English (Cayman Islands).
     */
    #[Label('English (Cayman Islands)')]
    public const EN_KY = 'en_KY';

    /**
     * English (Christmas Island).
     */
    #[Label('English (Christmas Island)')]
    public const EN_CX = 'en_CX';

    /**
     * English (Cocos (Keeling) Islands).
     */
    #[Label('English (Cocos (Keeling) Islands)')]
    public const EN_CC = 'en_CC';

    /**
     * English (Cook Islands).
     */
    #[Label('English (Cook Islands)')]
    public const EN_CK = 'en_CK';

    /**
     * English (Diego Garcia).
     */
    #[Label('English (Diego Garcia)')]
    public const EN_DG = 'en_DG';

    /**
     * English (Dominica).
     */
    #[Label('English (Dominica)')]
    public const EN_DM = 'en_DM';

    /**
     * English (Eritrea).
     */
    #[Label('English (Eritrea)')]
    public const EN_ER = 'en_ER';

    /**
     * English (Falkland Islands).
     */
    #[Label('English (Falkland Islands)')]
    public const EN_FK = 'en_FK';

    /**
     * English (Fiji).
     */
    #[Label('English (Fiji)')]
    public const EN_FJ = 'en_FJ';

    /**
     * English (Gambia).
     */
    #[Label('English (Gambia)')]
    public const EN_GM = 'en_GM';

    /**
     * English (Ghana).
     */
    #[Label('English (Ghana)')]
    public const EN_GH = 'en_GH';

    /**
     * English (Gibraltar).
     */
    #[Label('English (Gibraltar)')]
    public const EN_GI = 'en_GI';

    /**
     * English (Grenada).
     */
    #[Label('English (Grenada)')]
    public const EN_GD = 'en_GD';

    /**
     * English (Guam).
     */
    #[Label('English (Guam)')]
    public const EN_GU = 'en_GU';

    /**
     * English (Guernsey).
     */
    #[Label('English (Guernsey)')]
    public const EN_GG = 'en_GG';

    /**
     * English (Guyana).
     */
    #[Label('English (Guyana)')]
    public const EN_GY = 'en_GY';

    /**
     * English (Hong Kong SAR China).
     */
    #[Label('English (Hong Kong SAR China)')]
    public const EN_HK = 'en_HK';

    /**
     * English (India).
     */
    #[Label('English (India)')]
    public const EN_IN = 'en_IN';

    /**
     * English (Ireland).
     */
    #[Label('English (Ireland)')]
    public const EN_IE = 'en_IE';

    /**
     * English (Isle of Man).
     */
    #[Label('English (Isle of Man)')]
    public const EN_IM = 'en_IM';

    /**
     * English (Jamaica).
     */
    #[Label('English (Jamaica)')]
    public const EN_JM = 'en_JM';

    /**
     * English (Jersey).
     */
    #[Label('English (Jersey)')]
    public const EN_JE = 'en_JE';

    /**
     * English (Kenya).
     */
    #[Label('English (Kenya)')]
    public const EN_KE = 'en_KE';

    /**
     * English (Kiribati).
     */
    #[Label('English (Kiribati)')]
    public const EN_KI = 'en_KI';

    /**
     * English (Lesotho).
     */
    #[Label('English (Lesotho)')]
    public const EN_LS = 'en_LS';

    /**
     * English (Liberia).
     */
    #[Label('English (Liberia)')]
    public const EN_LR = 'en_LR';

    /**
     * English (Macau SAR China).
     */
    #[Label('English (Macau SAR China)')]
    public const EN_MO = 'en_MO';

    /**
     * English (Madagascar).
     */
    #[Label('English (Madagascar)')]
    public const EN_MG = 'en_MG';

    /**
     * English (Malawi).
     */
    #[Label('English (Malawi)')]
    public const EN_MW = 'en_MW';

    /**
     * English (Malaysia).
     */
    #[Label('English (Malaysia)')]
    public const EN_MY = 'en_MY';

    /**
     * English (Malta).
     */
    #[Label('English (Malta)')]
    public const EN_MT = 'en_MT';

    /**
     * English (Marshall Islands).
     */
    #[Label('English (Marshall Islands)')]
    public const EN_MH = 'en_MH';

    /**
     * English (Mauritius).
     */
    #[Label('English (Mauritius)')]
    public const EN_MU = 'en_MU';

    /**
     * English (Micronesia).
     */
    #[Label('English (Micronesia)')]
    public const EN_FM = 'en_FM';

    /**
     * English (Montserrat).
     */
    #[Label('English (Montserrat)')]
    public const EN_MS = 'en_MS';

    /**
     * English (Namibia).
     */
    #[Label('English (Namibia)')]
    public const EN_NA = 'en_NA';

    /**
     * English (Nauru).
     */
    #[Label('English (Nauru)')]
    public const EN_NR = 'en_NR';

    /**
     * English (New Zealand).
     */
    #[Label('English (New Zealand)')]
    public const EN_NZ = 'en_NZ';

    /**
     * English (Nigeria).
     */
    #[Label('English (Nigeria)')]
    public const EN_NG = 'en_NG';

    /**
     * English (Niue).
     */
    #[Label('English (Niue)')]
    public const EN_NU = 'en_NU';

    /**
     * English (Norfolk Island).
     */
    #[Label('English (Norfolk Island)')]
    public const EN_NF = 'en_NF';

    /**
     * English (Northern Mariana Islands).
     */
    #[Label('English (Northern Mariana Islands)')]
    public const EN_MP = 'en_MP';

    /**
     * English (Pakistan).
     */
    #[Label('English (Pakistan)')]
    public const EN_PK = 'en_PK';

    /**
     * English (Palau).
     */
    #[Label('English (Palau)')]
    public const EN_PW = 'en_PW';

    /**
     * English (Papua New Guinea).
     */
    #[Label('English (Papua New Guinea)')]
    public const EN_PG = 'en_PG';

    /**
     * English (Philippines).
     */
    #[Label('English (Philippines)')]
    public const EN_PH = 'en_PH';

    /**
     * English (Pitcairn Islands).
     */
    #[Label('English (Pitcairn Islands)')]
    public const EN_PN = 'en_PN';

    /**
     * English (Puerto Rico).
     */
    #[Label('English (Puerto Rico)')]
    public const EN_PR = 'en_PR';

    /**
     * English (Samoa).
     */
    #[Label('English (Samoa)')]
    public const EN_WS = 'en_WS';

    /**
     * English (Seychelles).
     */
    #[Label('English (Seychelles)')]
    public const EN_SC = 'en_SC';

    /**
     * English (Sierra Leone).
     */
    #[Label('English (Sierra Leone)')]
    public const EN_SL = 'en_SL';

    /**
     * English (Singapore).
     */
    #[Label('English (Singapore)')]
    public const EN_SG = 'en_SG';

    /**
     * English (Sint Maarten).
     */
    #[Label('English (Sint Maarten)')]
    public const EN_SX = 'en_SX';

    /**
     * English (Solomon Islands).
     */
    #[Label('English (Solomon Islands)')]
    public const EN_SB = 'en_SB';

    /**
     * English (South Africa).
     */
    #[Label('English (South Africa)')]
    public const EN_ZA = 'en_ZA';

    /**
     * English (South Sudan).
     */
    #[Label('English (South Sudan)')]
    public const EN_SS = 'en_SS';

    /**
     * English (St. Helena).
     */
    #[Label('English (St. Helena)')]
    public const EN_SH = 'en_SH';

    /**
     * English (St. Kitts & Nevis).
     */
    #[Label('English (St. Kitts & Nevis)')]
    public const EN_KN = 'en_KN';

    /**
     * English (St. Lucia).
     */
    #[Label('English (St. Lucia)')]
    public const EN_LC = 'en_LC';

    /**
     * English (St. Vincent & Grenadines).
     */
    #[Label('English (St. Vincent & Grenadines)')]
    public const EN_VC = 'en_VC';

    /**
     * English (Sudan).
     */
    #[Label('English (Sudan)')]
    public const EN_SD = 'en_SD';

    /**
     * English (Swaziland).
     */
    #[Label('English (Swaziland)')]
    public const EN_SZ = 'en_SZ';

    /**
     * English (Tanzania).
     */
    #[Label('English (Tanzania)')]
    public const EN_TZ = 'en_TZ';

    /**
     * English (Tokelau).
     */
    #[Label('English (Tokelau)')]
    public const EN_TK = 'en_TK';

    /**
     * English (Trinidad & Tobago).
     */
    #[Label('English (Trinidad & Tobago)')]
    public const EN_TT = 'en_TT';

    /**
     * English (Turks & Caicos Islands).
     */
    #[Label('English (Turks & Caicos Islands)')]
    public const EN_TC = 'en_TC';

    /**
     * English (Tuvalu).
     */
    #[Label('English (Tuvalu)')]
    public const EN_TV = 'en_TV';

    /**
     * English (U.S. Outlying Islands).
     */
    #[Label('English (U.S. Outlying Islands)')]
    public const EN_UM = 'en_UM';

    /**
     * English (U.S. Virgin Islands).
     */
    #[Label('English (U.S. Virgin Islands)')]
    public const EN_VI = 'en_VI';

    /**
     * English (Uganda).
     */
    #[Label('English (Uganda)')]
    public const EN_UG = 'en_UG';

    /**
     * English (United Kingdom).
     */
    #[Label('English (United Kingdom)')]
    public const EN_GB = 'en_GB';

    /**
     * English (United States).
     */
    #[Label('English (United States)')]
    public const EN_US = 'en_US';

    /**
     * English (Vanuatu).
     */
    #[Label('English (Vanuatu)')]
    public const EN_VU = 'en_VU';

    /**
     * English (Zambia).
     */
    #[Label('English (Zambia)')]
    public const EN_ZM = 'en_ZM';

    /**
     * English (Zimbabwe).
     */
    #[Label('English (Zimbabwe)')]
    public const EN_ZW = 'en_ZW';

    /**
     * Estonian (Estonia).
     */
    #[Label('Estonian (Estonia)')]
    public const ET_EE = 'et_EE';

    /**
     * Ewe.
     */
    #[Label('Ewe')]
    public const EE = 'ee';

    /**
     * Ewe (Ghana).
     */
    #[Label('Ewe (Ghana)')]
    public const EE_GH = 'ee_GH';

    /**
     * Ewe (Togo).
     */
    #[Label('Ewe (Togo)')]
    public const EE_TG = 'ee_TG';

    /**
     * Faroese (Faroe Islands).
     */
    #[Label('Faroese (Faroe Islands)')]
    public const FO_FO = 'fo_FO';

    /**
     * Finnish (Finland).
     */
    #[Label('Finnish (Finland)')]
    public const FI_FI = 'fi_FI';

    /**
     * French (Algeria).
     */
    #[Label('French (Algeria)')]
    public const FR_DZ = 'fr_DZ';

    /**
     * French (Belgium).
     */
    #[Label('French (Belgium)')]
    public const FR_BE = 'fr_BE';

    /**
     * French (Benin).
     */
    #[Label('French (Benin)')]
    public const FR_BJ = 'fr_BJ';

    /**
     * French (Burkina Faso).
     */
    #[Label('French (Burkina Faso)')]
    public const FR_BF = 'fr_BF';

    /**
     * French (Burundi).
     */
    #[Label('French (Burundi)')]
    public const FR_BI = 'fr_BI';

    /**
     * French (Cameroon).
     */
    #[Label('French (Cameroon)')]
    public const FR_CM = 'fr_CM';

    /**
     * French (Canada).
     */
    #[Label('French (Canada)')]
    public const FR_CA = 'fr_CA';

    /**
     * French (Central African Republic).
     */
    #[Label('French (Central African Republic)')]
    public const FR_CF = 'fr_CF';

    /**
     * French (Chad).
     */
    #[Label('French (Chad)')]
    public const FR_TD = 'fr_TD';

    /**
     * French (Comoros).
     */
    #[Label('French (Comoros)')]
    public const FR_KM = 'fr_KM';

    /**
     * French (Congo - Brazzaville).
     */
    #[Label('French (Congo - Brazzaville)')]
    public const FR_CG = 'fr_CG';

    /**
     * French (Congo - Kinshasa).
     */
    #[Label('French (Congo - Kinshasa)')]
    public const FR_CD = 'fr_CD';

    /**
     * French (Côte d’Ivoire).
     */
    #[Label('French (Côte d’Ivoire)')]
    public const FR_CI = 'fr_CI';

    /**
     * French (Djibouti).
     */
    #[Label('French (Djibouti)')]
    public const FR_DJ = 'fr_DJ';

    /**
     * French (Equatorial Guinea).
     */
    #[Label('French (Equatorial Guinea)')]
    public const FR_GQ = 'fr_GQ';

    /**
     * French (France).
     */
    #[Label('French (France)')]
    public const FR_FR = 'fr_FR';

    /**
     * French (French Guiana).
     */
    #[Label('French (French Guiana)')]
    public const FR_GF = 'fr_GF';

    /**
     * French (French Polynesia).
     */
    #[Label('French (French Polynesia)')]
    public const FR_PF = 'fr_PF';

    /**
     * French (Gabon).
     */
    #[Label('French (Gabon)')]
    public const FR_GA = 'fr_GA';

    /**
     * French (Guadeloupe).
     */
    #[Label('French (Guadeloupe)')]
    public const FR_GP = 'fr_GP';

    /**
     * French (Guinea).
     */
    #[Label('French (Guinea)')]
    public const FR_GN = 'fr_GN';

    /**
     * French (Haiti).
     */
    #[Label('French (Haiti)')]
    public const FR_HT = 'fr_HT';

    /**
     * French (Luxembourg).
     */
    #[Label('French (Luxembourg)')]
    public const FR_LU = 'fr_LU';

    /**
     * French (Madagascar).
     */
    #[Label('French (Madagascar)')]
    public const FR_MG = 'fr_MG';

    /**
     * French (Mali).
     */
    #[Label('French (Mali)')]
    public const FR_ML = 'fr_ML';

    /**
     * French (Martinique).
     */
    #[Label('French (Martinique)')]
    public const FR_MQ = 'fr_MQ';

    /**
     * French (Mauritania).
     */
    #[Label('French (Mauritania)')]
    public const FR_MR = 'fr_MR';

    /**
     * French (Mauritius).
     */
    #[Label('French (Mauritius)')]
    public const FR_MU = 'fr_MU';

    /**
     * French (Mayotte).
     */
    #[Label('French (Mayotte)')]
    public const FR_YT = 'fr_YT';

    /**
     * French (Monaco).
     */
    #[Label('French (Monaco)')]
    public const FR_MC = 'fr_MC';

    /**
     * French (Morocco).
     */
    #[Label('French (Morocco)')]
    public const FR_MA = 'fr_MA';

    /**
     * French (New Caledonia).
     */
    #[Label('French (New Caledonia)')]
    public const FR_NC = 'fr_NC';

    /**
     * French (Niger).
     */
    #[Label('French (Niger)')]
    public const FR_NE = 'fr_NE';

    /**
     * French (Réunion).
     */
    #[Label('French (Réunion)')]
    public const FR_RE = 'fr_RE';

    /**
     * French (Senegal).
     */
    #[Label('French (Senegal)')]
    public const FR_SN = 'fr_SN';

    /**
     * French (Seychelles).
     */
    #[Label('French (Seychelles)')]
    public const FR_SC = 'fr_SC';

    /**
     * French (St. Barthélemy).
     */
    #[Label('French (St. Barthélemy)')]
    public const FR_BL = 'fr_BL';

    /**
     * French (St. Martin).
     */
    #[Label('French (St. Martin)')]
    public const FR_MF = 'fr_MF';

    /**
     * French (St. Pierre & Miquelon).
     */
    #[Label('French (St. Pierre & Miquelon)')]
    public const FR_PM = 'fr_PM';

    /**
     * French (Switzerland).
     */
    #[Label('French (Switzerland)')]
    public const FR_CH = 'fr_CH';

    /**
     * French (Syria).
     */
    #[Label('French (Syria)')]
    public const FR_SY = 'fr_SY';

    /**
     * French (Togo).
     */
    #[Label('French (Togo)')]
    public const FR_TG = 'fr_TG';

    /**
     * French (Tunisia).
     */
    #[Label('French (Tunisia)')]
    public const FR_TN = 'fr_TN';

    /**
     * French (Vanuatu).
     */
    #[Label('French (Vanuatu)')]
    public const FR_VU = 'fr_VU';

    /**
     * French (Wallis & Futuna).
     */
    #[Label('French (Wallis & Futuna)')]
    public const FR_WF = 'fr_WF';

    /**
     * Fulah.
     */
    #[Label('Fulah')]
    public const FF = 'ff';

    /**
     * Fulah (Cameroon).
     */
    #[Label('Fulah (Cameroon)')]
    public const FF_CM = 'ff_CM';

    /**
     * Fulah (Guinea).
     */
    #[Label('Fulah (Guinea)')]
    public const FF_GN = 'ff_GN';

    /**
     * Fulah (Mauritania).
     */
    #[Label('Fulah (Mauritania)')]
    public const FF_MR = 'ff_MR';

    /**
     * Fulah (Senegal).
     */
    #[Label('Fulah (Senegal)')]
    public const FF_SN = 'ff_SN';

    /**
     * Galician (Spain).
     */
    #[Label('Galician (Spain)')]
    public const GL_ES = 'gl_ES';

    /**
     * Ganda.
     */
    #[Label('Ganda')]
    public const LG = 'lg';

    /**
     * Ganda (Uganda).
     */
    #[Label('Ganda (Uganda)')]
    public const LG_UG = 'lg_UG';

    /**
     * Georgian (Georgia).
     */
    #[Label('Georgian (Georgia)')]
    public const KA_GE = 'ka_GE';

    /**
     * German (Austria).
     */
    #[Label('German (Austria)')]
    public const DE_AT = 'de_AT';

    /**
     * German (Belgium).
     */
    #[Label('German (Belgium)')]
    public const DE_BE = 'de_BE';

    /**
     * German (Germany).
     */
    #[Label('German (Germany)')]
    public const DE_DE = 'de_DE';

    /**
     * German (Liechtenstein).
     */
    #[Label('German (Liechtenstein)')]
    public const DE_LI = 'de_LI';

    /**
     * German (Luxembourg).
     */
    #[Label('German (Luxembourg)')]
    public const DE_LU = 'de_LU';

    /**
     * German (Switzerland).
     */
    #[Label('German (Switzerland)')]
    public const DE_CH = 'de_CH';

    /**
     * Greek (Cyprus).
     */
    #[Label('Greek (Cyprus)')]
    public const EL_CY = 'el_CY';

    /**
     * Greek (Greece).
     */
    #[Label('Greek (Greece)')]
    public const EL_GR = 'el_GR';

    /**
     * Gujarati (India).
     */
    #[Label('Gujarati (India)')]
    public const GU_IN = 'gu_IN';

    /**
     * Hausa.
     */
    #[Label('Hausa')]
    public const HA = 'ha';

    /**
     * Hausa (Ghana).
     */
    #[Label('Hausa (Ghana)')]
    public const HA_GH = 'ha_GH';

    /**
     * Hausa (Latin, Ghana).
     */
    #[Label('Hausa (Latin, Ghana)')]
    public const HA_LATN_GH = 'ha_Latn_GH';

    /**
     * Hausa (Latin, Niger).
     */
    #[Label('Hausa (Latin, Niger)')]
    public const HA_LATN_NE = 'ha_Latn_NE';

    /**
     * Hausa (Latin, Nigeria).
     */
    #[Label('Hausa (Latin, Nigeria)')]
    public const HA_LATN_NG = 'ha_Latn_NG';

    /**
     * Hausa (Latin).
     */
    #[Label('Hausa (Latin)')]
    public const HA_LATN = 'ha_Latn';

    /**
     * Hausa (Niger).
     */
    #[Label('Hausa (Niger)')]
    public const HA_NE = 'ha_NE';

    /**
     * Hausa (Nigeria).
     */
    #[Label('Hausa (Nigeria)')]
    public const HA_NG = 'ha_NG';

    /**
     * Hebrew (Israel).
     */
    #[Label('Hebrew (Israel)')]
    public const HE_IL = 'he_IL';

    /**
     * Hindi (India).
     */
    #[Label('Hindi (India)')]
    public const HI_IN = 'hi_IN';

    /**
     * Hungarian (Hungary).
     */
    #[Label('Hungarian (Hungary)')]
    public const HU_HU = 'hu_HU';

    /**
     * Icelandic (Iceland).
     */
    #[Label('Icelandic (Iceland)')]
    public const IS_IS = 'is_IS';

    /**
     * Icyalubaniya.
     */
    #[Label('Icyalubaniya')]
    public const SQ = 'sq';

    /**
     * Icyarabu.
     */
    #[Label('Icyarabu')]
    public const AR = 'ar';

    /**
     * Icyasamizi.
     */
    #[Label('Icyasamizi')]
    public const AS = 'as';

    /**
     * Icyesipanyolo.
     */
    #[Label('Icyesipanyolo')]
    public const ES = 'es';

    /**
     * Icyesiperanto.
     */
    #[Label('Icyesiperanto')]
    public const EO = 'eo';

    /**
     * Icyesitoniya.
     */
    #[Label('Icyesitoniya')]
    public const ET = 'et';

    /**
     * Icyongereza.
     */
    #[Label('Icyongereza')]
    public const EN = 'en';

    /**
     * Icyongereza (Igitonga).
     */
    #[Label('Icyongereza (Igitonga)')]
    public const EN_TO = 'en_TO';

    /**
     * Icyongereza (Rwanda).
     */
    #[Label('Icyongereza (Rwanda)')]
    public const EN_RW = 'en_RW';

    /**
     * Igbo.
     */
    #[Label('Igbo')]
    public const IG = 'ig';

    /**
     * Igbo (Nigeria).
     */
    #[Label('Igbo (Nigeria)')]
    public const IG_NG = 'ig_NG';

    /**
     * Igiceke.
     */
    #[Label('Igiceke')]
    public const CS = 'cs';

    /**
     * Igifaransa.
     */
    #[Label('Igifaransa')]
    public const FR = 'fr';

    /**
     * Igifaransa (Rwanda).
     */
    #[Label('Igifaransa (Rwanda)')]
    public const FR_RW = 'fr_RW';

    /**
     * Igifinilande.
     */
    #[Label('Igifinilande')]
    public const FI = 'fi';

    /**
     * Igifiriziyani.
     */
    #[Label('Igifiriziyani')]
    public const FY = 'fy';

    /**
     * Igiheburayo.
     */
    #[Label('Igiheburayo')]
    public const HE = 'he';

    /**
     * Igihindi.
     */
    #[Label('Igihindi')]
    public const HI = 'hi';

    /**
     * Igihongiriya.
     */
    #[Label('Igihongiriya')]
    public const HU = 'hu';

    /**
     * Igikambodiya.
     */
    #[Label('Igikambodiya')]
    public const KM = 'km';

    /**
     * Igikanada.
     */
    #[Label('Igikanada')]
    public const KN = 'kn';

    /**
     * Igikatalani.
     */
    #[Label('Igikatalani')]
    public const CA = 'ca';

    /**
     * Igikoreya.
     */
    #[Label('Igikoreya')]
    public const KO = 'ko';

    /**
     * Igikorowasiya.
     */
    #[Label('Igikorowasiya')]
    public const HR = 'hr';

    /**
     * Igipolone.
     */
    #[Label('Igipolone')]
    public const PL = 'pl';

    /**
     * Igiporutugali.
     */
    #[Label('Igiporutugali')]
    public const PT = 'pt';

    /**
     * Igipunjabi.
     */
    #[Label('Igipunjabi')]
    public const PA = 'pa';

    /**
     * Igiseribe.
     */
    #[Label('Igiseribe')]
    public const SR = 'sr';

    /**
     * Igisilande.
     */
    #[Label('Igisilande')]
    public const IS = 'is';

    /**
     * Igisilovaki.
     */
    #[Label('Igisilovaki')]
    public const SK = 'sk';

    /**
     * Igisomali.
     */
    #[Label('Igisomali')]
    public const SO = 'so';

    /**
     * Igisuweduwa.
     */
    #[Label('Igisuweduwa')]
    public const SV = 'sv';

    /**
     * Igiswahili.
     */
    #[Label('Igiswahili')]
    public const SW = 'sw';

    /**
     * Igitaliyani.
     */
    #[Label('Igitaliyani')]
    public const IT = 'it';

    /**
     * Igitamili.
     */
    #[Label('Igitamili')]
    public const TA = 'ta';

    /**
     * Igitayi.
     */
    #[Label('Igitayi')]
    public const TH = 'th';

    /**
     * Igitelugu.
     */
    #[Label('Igitelugu')]
    public const TE = 'te';

    /**
     * Igiturukiya.
     */
    #[Label('Igiturukiya')]
    public const TR = 'tr';

    /**
     * Ikibasiki.
     */
    #[Label('Ikibasiki')]
    public const EU = 'eu';

    /**
     * Ikibelarusiya.
     */
    #[Label('Ikibelarusiya')]
    public const BE = 'be';

    /**
     * Ikibengali.
     */
    #[Label('Ikibengali')]
    public const BN = 'bn';

    /**
     * Ikidage.
     */
    #[Label('Ikidage')]
    public const DE = 'de';

    /**
     * Ikidaninwa.
     */
    #[Label('Ikidaninwa')]
    public const DA = 'da';

    /**
     * Ikigalisiya.
     */
    #[Label('Ikigalisiya')]
    public const GL = 'gl';

    /**
     * Ikigaluwa.
     */
    #[Label('Ikigaluwa')]
    public const CY = 'cy';

    /**
     * Ikigaluwa cy’Igisweduwa.
     */
    #[Label('Ikigaluwa cy’Igisweduwa')]
    public const GD = 'gd';

    /**
     * Ikigereki.
     */
    #[Label('Ikigereki')]
    public const EL = 'el';

    /**
     * Ikilawotiyani.
     */
    #[Label('Ikilawotiyani')]
    public const LO = 'lo';

    /**
     * Ikilituwaniya.
     */
    #[Label('Ikilituwaniya')]
    public const LT = 'lt';

    /**
     * Ikimalayalami.
     */
    #[Label('Ikimalayalami')]
    public const ML = 'ml';

    /**
     * Ikimalayi.
     */
    #[Label('Ikimalayi')]
    public const MS = 'ms';

    /**
     * Ikimaliteze.
     */
    #[Label('Ikimaliteze')]
    public const MT = 'mt';

    /**
     * Ikimarati.
     */
    #[Label('Ikimarati')]
    public const MR = 'mr';

    /**
     * Ikimasedoniyani.
     */
    #[Label('Ikimasedoniyani')]
    public const MK = 'mk';

    /**
     * Ikimongoli.
     */
    #[Label('Ikimongoli')]
    public const MN = 'mn';

    /**
     * Ikinepali.
     */
    #[Label('Ikinepali')]
    public const NE = 'ne';

    /**
     * Ikinerilande.
     */
    #[Label('Ikinerilande')]
    public const NL = 'nl';

    /**
     * Ikinoruveji.
     */
    #[Label('Ikinoruveji')]
    public const NO = 'no';

    /**
     * Ikinyafurikaneri.
     */
    #[Label('Ikinyafurikaneri')]
    public const AF = 'af';

    /**
     * Ikinyaletoviyani.
     */
    #[Label('Ikinyaletoviyani')]
    public const LV = 'lv';

    /**
     * Ikinyarumaniya.
     */
    #[Label('Ikinyarumaniya')]
    public const RO = 'ro';

    /**
     * Ikinyarumeniya.
     */
    #[Label('Ikinyarumeniya')]
    public const HY = 'hy';

    /**
     * Ikinyasiloveniya.
     */
    #[Label('Ikinyasiloveniya')]
    public const SL = 'sl';

    /**
     * Ikinyaviyetinamu.
     */
    #[Label('Ikinyaviyetinamu')]
    public const VI = 'vi';

    /**
     * Ikinyayukereni.
     */
    #[Label('Ikinyayukereni')]
    public const UK = 'uk';

    /**
     * Ikinyendoziya.
     */
    #[Label('Ikinyendoziya')]
    public const ID = 'id';

    /**
     * Ikirilandi.
     */
    #[Label('Ikirilandi')]
    public const GA = 'ga';

    /**
     * Ikirusiya.
     */
    #[Label('Ikirusiya')]
    public const RU = 'ru';

    /**
     * Ikiwiguri.
     */
    #[Label('Ikiwiguri')]
    public const UG = 'ug';

    /**
     * Ikiyapani.
     */
    #[Label('Ikiyapani')]
    public const JA = 'ja';

    /**
     * Ilingala.
     */
    #[Label('Ilingala')]
    public const LN = 'ln';

    /**
     * Impashito.
     */
    #[Label('Impashito')]
    public const PS = 'ps';

    /**
     * Indonesian (Indonesia).
     */
    #[Label('Indonesian (Indonesia)')]
    public const ID_ID = 'id_ID';

    /**
     * Inkerigizi.
     */
    #[Label('Inkerigizi')]
    public const KY = 'ky';

    /**
     * Inyamuhariki.
     */
    #[Label('Inyamuhariki')]
    public const AM = 'am';

    /**
     * Inyatigirinya.
     */
    #[Label('Inyatigirinya')]
    public const TI = 'ti';

    /**
     * Inyazeribayijani.
     */
    #[Label('Inyazeribayijani')]
    public const AZ = 'az';

    /**
     * Inyebiritoni.
     */
    #[Label('Inyebiritoni')]
    public const BR = 'br';

    /**
     * Inyebosiniya.
     */
    #[Label('Inyebosiniya')]
    public const BS = 'bs';

    /**
     * Inyefaroyizi.
     */
    #[Label('Inyefaroyizi')]
    public const FO = 'fo';

    /**
     * Inyegujarati.
     */
    #[Label('Inyegujarati')]
    public const GU = 'gu';

    /**
     * Inyejeworujiya.
     */
    #[Label('Inyejeworujiya')]
    public const KA = 'ka';

    /**
     * Inyenoruveji (Nyonorusiki).
     */
    #[Label('Inyenoruveji (Nyonorusiki)')]
    public const NN = 'nn';

    /**
     * Inyeperisi.
     */
    #[Label('Inyeperisi')]
    public const FA = 'fa';

    /**
     * Inyeseribiya na Korowasiya.
     */
    #[Label('Inyeseribiya na Korowasiya')]
    public const SH = 'sh';

    /**
     * Inyesimpaleze.
     */
    #[Label('Inyesimpaleze')]
    public const SI = 'si';

    /**
     * Inyeyidishi.
     */
    #[Label('Inyeyidishi')]
    public const YI = 'yi';

    /**
     * Inyeyurudu.
     */
    #[Label('Inyeyurudu')]
    public const UR = 'ur';

    /**
     * Inyeyuzubeki.
     */
    #[Label('Inyeyuzubeki')]
    public const UZ = 'uz';

    /**
     * Inyezulu.
     */
    #[Label('Inyezulu')]
    public const ZU = 'zu';

    /**
     * Inyoriya.
     */
    #[Label('Inyoriya')]
    public const OR = 'or';

    /**
     * Irish (Ireland).
     */
    #[Label('Irish (Ireland)')]
    public const GA_IE = 'ga_IE';

    /**
     * Italian (Italy).
     */
    #[Label('Italian (Italy)')]
    public const IT_IT = 'it_IT';

    /**
     * Italian (San Marino).
     */
    #[Label('Italian (San Marino)')]
    public const IT_SM = 'it_SM';

    /**
     * Italian (Switzerland).
     */
    #[Label('Italian (Switzerland)')]
    public const IT_CH = 'it_CH';

    /**
     * Japanese (Japan).
     */
    #[Label('Japanese (Japan)')]
    public const JA_JP = 'ja_JP';

    /**
     * Kalaallisut.
     */
    #[Label('Kalaallisut')]
    public const KL = 'kl';

    /**
     * Kalaallisut (Greenland).
     */
    #[Label('Kalaallisut (Greenland)')]
    public const KL_GL = 'kl_GL';

    /**
     * Kannada (India).
     */
    #[Label('Kannada (India)')]
    public const KN_IN = 'kn_IN';

    /**
     * Kashmiri.
     */
    #[Label('Kashmiri')]
    public const KS = 'ks';

    /**
     * Kashmiri (Arabic, India).
     */
    #[Label('Kashmiri (Arabic, India)')]
    public const KS_ARAB_IN = 'ks_Arab_IN';

    /**
     * Kashmiri (Arabic).
     */
    #[Label('Kashmiri (Arabic)')]
    public const KS_ARAB = 'ks_Arab';

    /**
     * Kashmiri (India).
     */
    #[Label('Kashmiri (India)')]
    public const KS_IN = 'ks_IN';

    /**
     * Kazakh.
     */
    #[Label('Kazakh')]
    public const KK = 'kk';

    /**
     * Kazakh (Cyrillic, Kazakhstan).
     */
    #[Label('Kazakh (Cyrillic, Kazakhstan)')]
    public const KK_CYRL_KZ = 'kk_Cyrl_KZ';

    /**
     * Kazakh (Cyrillic).
     */
    #[Label('Kazakh (Cyrillic)')]
    public const KK_CYRL = 'kk_Cyrl';

    /**
     * Kazakh (Kazakhstan).
     */
    #[Label('Kazakh (Kazakhstan)')]
    public const KK_KZ = 'kk_KZ';

    /**
     * Khmer (Cambodia).
     */
    #[Label('Khmer (Cambodia)')]
    public const KM_KH = 'km_KH';

    /**
     * Kikuyu.
     */
    #[Label('Kikuyu')]
    public const KI = 'ki';

    /**
     * Kikuyu (Kenya).
     */
    #[Label('Kikuyu (Kenya)')]
    public const KI_KE = 'ki_KE';

    /**
     * Kinyarwanda.
     */
    #[Label('Kinyarwanda')]
    public const RW = 'rw';

    /**
     * Kinyarwanda (Rwanda).
     */
    #[Label('Kinyarwanda (Rwanda)')]
    public const RW_RW = 'rw_RW';

    /**
     * Korean (North Korea).
     */
    #[Label('Korean (North Korea)')]
    public const KO_KP = 'ko_KP';

    /**
     * Korean (South Korea).
     */
    #[Label('Korean (South Korea)')]
    public const KO_KR = 'ko_KR';

    /**
     * Kyrgyz (Cyrillic, Kyrgyzstan).
     */
    #[Label('Kyrgyz (Cyrillic, Kyrgyzstan)')]
    public const KY_CYRL_KG = 'ky_Cyrl_KG';

    /**
     * Kyrgyz (Cyrillic).
     */
    #[Label('Kyrgyz (Cyrillic)')]
    public const KY_CYRL = 'ky_Cyrl';

    /**
     * Kyrgyz (Kyrgyzstan).
     */
    #[Label('Kyrgyz (Kyrgyzstan)')]
    public const KY_KG = 'ky_KG';

    /**
     * Lao (Laos).
     */
    #[Label('Lao (Laos)')]
    public const LO_LA = 'lo_LA';

    /**
     * Latvian (Latvia).
     */
    #[Label('Latvian (Latvia)')]
    public const LV_LV = 'lv_LV';

    /**
     * Lingala (Angola).
     */
    #[Label('Lingala (Angola)')]
    public const LN_AO = 'ln_AO';

    /**
     * Lingala (Central African Republic).
     */
    #[Label('Lingala (Central African Republic)')]
    public const LN_CF = 'ln_CF';

    /**
     * Lingala (Congo - Brazzaville).
     */
    #[Label('Lingala (Congo - Brazzaville)')]
    public const LN_CG = 'ln_CG';

    /**
     * Lingala (Congo - Kinshasa).
     */
    #[Label('Lingala (Congo - Kinshasa)')]
    public const LN_CD = 'ln_CD';

    /**
     * Lithuanian (Lithuania).
     */
    #[Label('Lithuanian (Lithuania)')]
    public const LT_LT = 'lt_LT';

    /**
     * Luba-Katanga.
     */
    #[Label('Luba-Katanga')]
    public const LU = 'lu';

    /**
     * Luba-Katanga (Congo - Kinshasa).
     */
    #[Label('Luba-Katanga (Congo - Kinshasa)')]
    public const LU_CD = 'lu_CD';

    /**
     * Luxembourgish.
     */
    #[Label('Luxembourgish')]
    public const LB = 'lb';

    /**
     * Luxembourgish (Luxembourg).
     */
    #[Label('Luxembourgish (Luxembourg)')]
    public const LB_LU = 'lb_LU';

    /**
     * Macedonian (Macedonia).
     */
    #[Label('Macedonian (Macedonia)')]
    public const MK_MK = 'mk_MK';

    /**
     * Malagasy.
     */
    #[Label('Malagasy')]
    public const MG = 'mg';

    /**
     * Malagasy (Madagascar).
     */
    #[Label('Malagasy (Madagascar)')]
    public const MG_MG = 'mg_MG';

    /**
     * Malay (Brunei).
     */
    #[Label('Malay (Brunei)')]
    public const MS_BN = 'ms_BN';

    /**
     * Malay (Latin, Brunei).
     */
    #[Label('Malay (Latin, Brunei)')]
    public const MS_LATN_BN = 'ms_Latn_BN';

    /**
     * Malay (Latin, Malaysia).
     */
    #[Label('Malay (Latin, Malaysia)')]
    public const MS_LATN_MY = 'ms_Latn_MY';

    /**
     * Malay (Latin, Singapore).
     */
    #[Label('Malay (Latin, Singapore)')]
    public const MS_LATN_SG = 'ms_Latn_SG';

    /**
     * Malay (Latin).
     */
    #[Label('Malay (Latin)')]
    public const MS_LATN = 'ms_Latn';

    /**
     * Malay (Malaysia).
     */
    #[Label('Malay (Malaysia)')]
    public const MS_MY = 'ms_MY';

    /**
     * Malay (Singapore).
     */
    #[Label('Malay (Singapore)')]
    public const MS_SG = 'ms_SG';

    /**
     * Malayalam (India).
     */
    #[Label('Malayalam (India)')]
    public const ML_IN = 'ml_IN';

    /**
     * Maltese (Malta).
     */
    #[Label('Maltese (Malta)')]
    public const MT_MT = 'mt_MT';

    /**
     * Manx.
     */
    #[Label('Manx')]
    public const GV = 'gv';

    /**
     * Manx (Isle of Man).
     */
    #[Label('Manx (Isle of Man)')]
    public const GV_IM = 'gv_IM';

    /**
     * Marathi (India).
     */
    #[Label('Marathi (India)')]
    public const MR_IN = 'mr_IN';

    /**
     * Mongolian (Cyrillic, Mongolia).
     */
    #[Label('Mongolian (Cyrillic, Mongolia)')]
    public const MN_CYRL_MN = 'mn_Cyrl_MN';

    /**
     * Mongolian (Cyrillic).
     */
    #[Label('Mongolian (Cyrillic)')]
    public const MN_CYRL = 'mn_Cyrl';

    /**
     * Mongolian (Mongolia).
     */
    #[Label('Mongolian (Mongolia)')]
    public const MN_MN = 'mn_MN';

    /**
     * Nepali (India).
     */
    #[Label('Nepali (India)')]
    public const NE_IN = 'ne_IN';

    /**
     * Nepali (Nepal).
     */
    #[Label('Nepali (Nepal)')]
    public const NE_NP = 'ne_NP';

    /**
     * North Ndebele.
     */
    #[Label('North Ndebele')]
    public const ND = 'nd';

    /**
     * North Ndebele (Zimbabwe).
     */
    #[Label('North Ndebele (Zimbabwe)')]
    public const ND_ZW = 'nd_ZW';

    /**
     * Northern Sami.
     */
    #[Label('Northern Sami')]
    public const SE = 'se';

    /**
     * Northern Sami (Finland).
     */
    #[Label('Northern Sami (Finland)')]
    public const SE_FI = 'se_FI';

    /**
     * Northern Sami (Norway).
     */
    #[Label('Northern Sami (Norway)')]
    public const SE_NO = 'se_NO';

    /**
     * Northern Sami (Sweden).
     */
    #[Label('Northern Sami (Sweden)')]
    public const SE_SE = 'se_SE';

    /**
     * Norwegian (Norway).
     */
    #[Label('Norwegian (Norway)')]
    public const NO_NO = 'no_NO';

    /**
     * Norwegian Bokmål.
     */
    #[Label('Norwegian Bokmål')]
    public const NB = 'nb';

    /**
     * Norwegian Bokmål (Norway).
     */
    #[Label('Norwegian Bokmål (Norway)')]
    public const NB_NO = 'nb_NO';

    /**
     * Norwegian Bokmål (Svalbard & Jan Mayen).
     */
    #[Label('Norwegian Bokmål (Svalbard & Jan Mayen)')]
    public const NB_SJ = 'nb_SJ';

    /**
     * Norwegian Nynorsk (Norway).
     */
    #[Label('Norwegian Nynorsk (Norway)')]
    public const NN_NO = 'nn_NO';

    /**
     * Oriya (India).
     */
    #[Label('Oriya (India)')]
    public const OR_IN = 'or_IN';

    /**
     * Oromo.
     */
    #[Label('Oromo')]
    public const OM = 'om';

    /**
     * Oromo (Ethiopia).
     */
    #[Label('Oromo (Ethiopia)')]
    public const OM_ET = 'om_ET';

    /**
     * Oromo (Kenya).
     */
    #[Label('Oromo (Kenya)')]
    public const OM_KE = 'om_KE';

    /**
     * Ossetic.
     */
    #[Label('Ossetic')]
    public const OS = 'os';

    /**
     * Ossetic (Georgia).
     */
    #[Label('Ossetic (Georgia)')]
    public const OS_GE = 'os_GE';

    /**
     * Ossetic (Russia).
     */
    #[Label('Ossetic (Russia)')]
    public const OS_RU = 'os_RU';

    /**
     * Pashto (Afghanistan).
     */
    #[Label('Pashto (Afghanistan)')]
    public const PS_AF = 'ps_AF';

    /**
     * Persian (Afghanistan).
     */
    #[Label('Persian (Afghanistan)')]
    public const FA_AF = 'fa_AF';

    /**
     * Persian (Iran).
     */
    #[Label('Persian (Iran)')]
    public const FA_IR = 'fa_IR';

    /**
     * Polish (Poland).
     */
    #[Label('Polish (Poland)')]
    public const PL_PL = 'pl_PL';

    /**
     * Portuguese (Angola).
     */
    #[Label('Portuguese (Angola)')]
    public const PT_AO = 'pt_AO';

    /**
     * Portuguese (Brazil).
     */
    #[Label('Portuguese (Brazil)')]
    public const PT_BR = 'pt_BR';

    /**
     * Portuguese (Cape Verde).
     */
    #[Label('Portuguese (Cape Verde)')]
    public const PT_CV = 'pt_CV';

    /**
     * Portuguese (Guinea-Bissau).
     */
    #[Label('Portuguese (Guinea-Bissau)')]
    public const PT_GW = 'pt_GW';

    /**
     * Portuguese (Macau SAR China).
     */
    #[Label('Portuguese (Macau SAR China)')]
    public const PT_MO = 'pt_MO';

    /**
     * Portuguese (Mozambique).
     */
    #[Label('Portuguese (Mozambique)')]
    public const PT_MZ = 'pt_MZ';

    /**
     * Portuguese (Portugal).
     */
    #[Label('Portuguese (Portugal)')]
    public const PT_PT = 'pt_PT';

    /**
     * Portuguese (São Tomé & Príncipe).
     */
    #[Label('Portuguese (São Tomé & Príncipe)')]
    public const PT_ST = 'pt_ST';

    /**
     * Portuguese (Timor-Leste).
     */
    #[Label('Portuguese (Timor-Leste)')]
    public const PT_TL = 'pt_TL';

    /**
     * Punjabi (Arabic, Pakistan).
     */
    #[Label('Punjabi (Arabic, Pakistan)')]
    public const PA_ARAB_PK = 'pa_Arab_PK';

    /**
     * Punjabi (Arabic).
     */
    #[Label('Punjabi (Arabic)')]
    public const PA_ARAB = 'pa_Arab';

    /**
     * Punjabi (Gurmukhi, India).
     */
    #[Label('Punjabi (Gurmukhi, India)')]
    public const PA_GURU_IN = 'pa_Guru_IN';

    /**
     * Punjabi (Gurmukhi).
     */
    #[Label('Punjabi (Gurmukhi)')]
    public const PA_GURU = 'pa_Guru';

    /**
     * Punjabi (India).
     */
    #[Label('Punjabi (India)')]
    public const PA_IN = 'pa_IN';

    /**
     * Punjabi (Pakistan).
     */
    #[Label('Punjabi (Pakistan)')]
    public const PA_PK = 'pa_PK';

    /**
     * Quechua.
     */
    #[Label('Quechua')]
    public const QU = 'qu';

    /**
     * Quechua (Bolivia).
     */
    #[Label('Quechua (Bolivia)')]
    public const QU_BO = 'qu_BO';

    /**
     * Quechua (Ecuador).
     */
    #[Label('Quechua (Ecuador)')]
    public const QU_EC = 'qu_EC';

    /**
     * Quechua (Peru).
     */
    #[Label('Quechua (Peru)')]
    public const QU_PE = 'qu_PE';

    /**
     * Romanian (Moldova).
     */
    #[Label('Romanian (Moldova)')]
    public const RO_MD = 'ro_MD';

    /**
     * Romanian (Romania).
     */
    #[Label('Romanian (Romania)')]
    public const RO_RO = 'ro_RO';

    /**
     * Romansh.
     */
    #[Label('Romansh')]
    public const RM = 'rm';

    /**
     * Romansh (Switzerland).
     */
    #[Label('Romansh (Switzerland)')]
    public const RM_CH = 'rm_CH';

    /**
     * Rundi.
     */
    #[Label('Rundi')]
    public const RN = 'rn';

    /**
     * Rundi (Burundi).
     */
    #[Label('Rundi (Burundi)')]
    public const RN_BI = 'rn_BI';

    /**
     * Russian (Belarus).
     */
    #[Label('Russian (Belarus)')]
    public const RU_BY = 'ru_BY';

    /**
     * Russian (Kazakhstan).
     */
    #[Label('Russian (Kazakhstan)')]
    public const RU_KZ = 'ru_KZ';

    /**
     * Russian (Kyrgyzstan).
     */
    #[Label('Russian (Kyrgyzstan)')]
    public const RU_KG = 'ru_KG';

    /**
     * Russian (Moldova).
     */
    #[Label('Russian (Moldova)')]
    public const RU_MD = 'ru_MD';

    /**
     * Russian (Russia).
     */
    #[Label('Russian (Russia)')]
    public const RU_RU = 'ru_RU';

    /**
     * Russian (Ukraine).
     */
    #[Label('Russian (Ukraine)')]
    public const RU_UA = 'ru_UA';

    /**
     * Sango.
     */
    #[Label('Sango')]
    public const SG = 'sg';

    /**
     * Sango (Central African Republic).
     */
    #[Label('Sango (Central African Republic)')]
    public const SG_CF = 'sg_CF';

    /**
     * Scottish Gaelic (United Kingdom).
     */
    #[Label('Scottish Gaelic (United Kingdom)')]
    public const GD_GB = 'gd_GB';

    /**
     * Serbian (Bosnia & Herzegovina).
     */
    #[Label('Serbian (Bosnia & Herzegovina)')]
    public const SR_BA = 'sr_BA';

    /**
     * Serbian (Cyrillic, Bosnia & Herzegovina).
     */
    #[Label('Serbian (Cyrillic, Bosnia & Herzegovina)')]
    public const SR_CYRL_BA = 'sr_Cyrl_BA';

    /**
     * Serbian (Cyrillic, Kosovo).
     */
    #[Label('Serbian (Cyrillic, Kosovo)')]
    public const SR_CYRL_XK = 'sr_Cyrl_XK';

    /**
     * Serbian (Cyrillic, Montenegro).
     */
    #[Label('Serbian (Cyrillic, Montenegro)')]
    public const SR_CYRL_ME = 'sr_Cyrl_ME';

    /**
     * Serbian (Cyrillic, Serbia).
     */
    #[Label('Serbian (Cyrillic, Serbia)')]
    public const SR_CYRL_RS = 'sr_Cyrl_RS';

    /**
     * Serbian (Cyrillic).
     */
    #[Label('Serbian (Cyrillic)')]
    public const SR_CYRL = 'sr_Cyrl';

    /**
     * Serbian (Kosovo).
     */
    #[Label('Serbian (Kosovo)')]
    public const SR_XK = 'sr_XK';

    /**
     * Serbian (Latin, Bosnia & Herzegovina).
     */
    #[Label('Serbian (Latin, Bosnia & Herzegovina)')]
    public const SR_LATN_BA = 'sr_Latn_BA';

    /**
     * Serbian (Latin, Kosovo).
     */
    #[Label('Serbian (Latin, Kosovo)')]
    public const SR_LATN_XK = 'sr_Latn_XK';

    /**
     * Serbian (Latin, Montenegro).
     */
    #[Label('Serbian (Latin, Montenegro)')]
    public const SR_LATN_ME = 'sr_Latn_ME';

    /**
     * Serbian (Latin, Serbia).
     */
    #[Label('Serbian (Latin, Serbia)')]
    public const SR_LATN_RS = 'sr_Latn_RS';

    /**
     * Serbian (Latin).
     */
    #[Label('Serbian (Latin)')]
    public const SR_LATN = 'sr_Latn';

    /**
     * Serbian (Montenegro).
     */
    #[Label('Serbian (Montenegro)')]
    public const SR_ME = 'sr_ME';

    /**
     * Serbian (Serbia).
     */
    #[Label('Serbian (Serbia)')]
    public const SR_RS = 'sr_RS';

    /**
     * Serbo-Croatian (Bosnia & Herzegovina).
     */
    #[Label('Serbo-Croatian (Bosnia & Herzegovina)')]
    public const SH_BA = 'sh_BA';

    /**
     * Shona.
     */
    #[Label('Shona')]
    public const SN = 'sn';

    /**
     * Shona (Zimbabwe).
     */
    #[Label('Shona (Zimbabwe)')]
    public const SN_ZW = 'sn_ZW';

    /**
     * Sichuan Yi.
     */
    #[Label('Sichuan Yi')]
    public const II = 'ii';

    /**
     * Sichuan Yi (China).
     */
    #[Label('Sichuan Yi (China)')]
    public const II_CN = 'ii_CN';

    /**
     * Sinhala (Sri Lanka).
     */
    #[Label('Sinhala (Sri Lanka)')]
    public const SI_LK = 'si_LK';

    /**
     * Slovak (Slovakia).
     */
    #[Label('Slovak (Slovakia)')]
    public const SK_SK = 'sk_SK';

    /**
     * Slovenian (Slovenia).
     */
    #[Label('Slovenian (Slovenia)')]
    public const SL_SI = 'sl_SI';

    /**
     * Somali (Djibouti).
     */
    #[Label('Somali (Djibouti)')]
    public const SO_DJ = 'so_DJ';

    /**
     * Somali (Ethiopia).
     */
    #[Label('Somali (Ethiopia)')]
    public const SO_ET = 'so_ET';

    /**
     * Somali (Kenya).
     */
    #[Label('Somali (Kenya)')]
    public const SO_KE = 'so_KE';

    /**
     * Somali (Somalia).
     */
    #[Label('Somali (Somalia)')]
    public const SO_SO = 'so_SO';

    /**
     * Spanish (Argentina).
     */
    #[Label('Spanish (Argentina)')]
    public const ES_AR = 'es_AR';

    /**
     * Spanish (Bolivia).
     */
    #[Label('Spanish (Bolivia)')]
    public const ES_BO = 'es_BO';

    /**
     * Spanish (Canary Islands).
     */
    #[Label('Spanish (Canary Islands)')]
    public const ES_IC = 'es_IC';

    /**
     * Spanish (Ceuta & Melilla).
     */
    #[Label('Spanish (Ceuta & Melilla)')]
    public const ES_EA = 'es_EA';

    /**
     * Spanish (Chile).
     */
    #[Label('Spanish (Chile)')]
    public const ES_CL = 'es_CL';

    /**
     * Spanish (Colombia).
     */
    #[Label('Spanish (Colombia)')]
    public const ES_CO = 'es_CO';

    /**
     * Spanish (Costa Rica).
     */
    #[Label('Spanish (Costa Rica)')]
    public const ES_CR = 'es_CR';

    /**
     * Spanish (Cuba).
     */
    #[Label('Spanish (Cuba)')]
    public const ES_CU = 'es_CU';

    /**
     * Spanish (Dominican Republic).
     */
    #[Label('Spanish (Dominican Republic)')]
    public const ES_DO = 'es_DO';

    /**
     * Spanish (Ecuador).
     */
    #[Label('Spanish (Ecuador)')]
    public const ES_EC = 'es_EC';

    /**
     * Spanish (El Salvador).
     */
    #[Label('Spanish (El Salvador)')]
    public const ES_SV = 'es_SV';

    /**
     * Spanish (Equatorial Guinea).
     */
    #[Label('Spanish (Equatorial Guinea)')]
    public const ES_GQ = 'es_GQ';

    /**
     * Spanish (Guatemala).
     */
    #[Label('Spanish (Guatemala)')]
    public const ES_GT = 'es_GT';

    /**
     * Spanish (Honduras).
     */
    #[Label('Spanish (Honduras)')]
    public const ES_HN = 'es_HN';

    /**
     * Spanish (Mexico).
     */
    #[Label('Spanish (Mexico)')]
    public const ES_MX = 'es_MX';

    /**
     * Spanish (Nicaragua).
     */
    #[Label('Spanish (Nicaragua)')]
    public const ES_NI = 'es_NI';

    /**
     * Spanish (Panama).
     */
    #[Label('Spanish (Panama)')]
    public const ES_PA = 'es_PA';

    /**
     * Spanish (Paraguay).
     */
    #[Label('Spanish (Paraguay)')]
    public const ES_PY = 'es_PY';

    /**
     * Spanish (Peru).
     */
    #[Label('Spanish (Peru)')]
    public const ES_PE = 'es_PE';

    /**
     * Spanish (Philippines).
     */
    #[Label('Spanish (Philippines)')]
    public const ES_PH = 'es_PH';

    /**
     * Spanish (Puerto Rico).
     */
    #[Label('Spanish (Puerto Rico)')]
    public const ES_PR = 'es_PR';

    /**
     * Spanish (Spain).
     */
    #[Label('Spanish (Spain)')]
    public const ES_ES = 'es_ES';

    /**
     * Spanish (United States).
     */
    #[Label('Spanish (United States)')]
    public const ES_US = 'es_US';

    /**
     * Spanish (Uruguay).
     */
    #[Label('Spanish (Uruguay)')]
    public const ES_UY = 'es_UY';

    /**
     * Spanish (Venezuela).
     */
    #[Label('Spanish (Venezuela)')]
    public const ES_VE = 'es_VE';

    /**
     * Swahili (Kenya).
     */
    #[Label('Swahili (Kenya)')]
    public const SW_KE = 'sw_KE';

    /**
     * Swahili (Tanzania).
     */
    #[Label('Swahili (Tanzania)')]
    public const SW_TZ = 'sw_TZ';

    /**
     * Swahili (Uganda).
     */
    #[Label('Swahili (Uganda)')]
    public const SW_UG = 'sw_UG';

    /**
     * Swedish (Åland Islands).
     */
    #[Label('Swedish (Åland Islands)')]
    public const SV_AX = 'sv_AX';

    /**
     * Swedish (Finland).
     */
    #[Label('Swedish (Finland)')]
    public const SV_FI = 'sv_FI';

    /**
     * Swedish (Sweden).
     */
    #[Label('Swedish (Sweden)')]
    public const SV_SE = 'sv_SE';

    /**
     * Tagalog.
     */
    #[Label('Tagalog')]
    public const TL = 'tl';

    /**
     * Tagalog (Philippines).
     */
    #[Label('Tagalog (Philippines)')]
    public const TL_PH = 'tl_PH';

    /**
     * Tamil (India).
     */
    #[Label('Tamil (India)')]
    public const TA_IN = 'ta_IN';

    /**
     * Tamil (Malaysia).
     */
    #[Label('Tamil (Malaysia)')]
    public const TA_MY = 'ta_MY';

    /**
     * Tamil (Singapore).
     */
    #[Label('Tamil (Singapore)')]
    public const TA_SG = 'ta_SG';

    /**
     * Tamil (Sri Lanka).
     */
    #[Label('Tamil (Sri Lanka)')]
    public const TA_LK = 'ta_LK';

    /**
     * Telugu (India).
     */
    #[Label('Telugu (India)')]
    public const TE_IN = 'te_IN';

    /**
     * Thai (Thailand).
     */
    #[Label('Thai (Thailand)')]
    public const TH_TH = 'th_TH';

    /**
     * Tibetan.
     */
    #[Label('Tibetan')]
    public const BO = 'bo';

    /**
     * Tibetan (China).
     */
    #[Label('Tibetan (China)')]
    public const BO_CN = 'bo_CN';

    /**
     * Tibetan (India).
     */
    #[Label('Tibetan (India)')]
    public const BO_IN = 'bo_IN';

    /**
     * Tigrinya (Eritrea).
     */
    #[Label('Tigrinya (Eritrea)')]
    public const TI_ER = 'ti_ER';

    /**
     * Tigrinya (Ethiopia).
     */
    #[Label('Tigrinya (Ethiopia)')]
    public const TI_ET = 'ti_ET';

    /**
     * Tongan.
     */
    #[Label('Tongan')]
    public const TO = 'to';

    /**
     * Tongan (Tonga).
     */
    #[Label('Tongan (Tonga)')]
    public const TO_TO = 'to_TO';

    /**
     * Turkish (Cyprus).
     */
    #[Label('Turkish (Cyprus)')]
    public const TR_CY = 'tr_CY';

    /**
     * Turkish (Turkey).
     */
    #[Label('Turkish (Turkey)')]
    public const TR_TR = 'tr_TR';

    /**
     * Ukrainian (Ukraine).
     */
    #[Label('Ukrainian (Ukraine)')]
    public const UK_UA = 'uk_UA';

    /**
     * Urdu (India).
     */
    #[Label('Urdu (India)')]
    public const UR_IN = 'ur_IN';

    /**
     * Urdu (Pakistan).
     */
    #[Label('Urdu (Pakistan)')]
    public const UR_PK = 'ur_PK';

    /**
     * Urunyabuligariya.
     */
    #[Label('Urunyabuligariya')]
    public const BG = 'bg';

    /**
     * Uyghur (Arabic, China).
     */
    #[Label('Uyghur (Arabic, China)')]
    public const UG_ARAB_CN = 'ug_Arab_CN';

    /**
     * Uyghur (Arabic).
     */
    #[Label('Uyghur (Arabic)')]
    public const UG_ARAB = 'ug_Arab';

    /**
     * Uyghur (China).
     */
    #[Label('Uyghur (China)')]
    public const UG_CN = 'ug_CN';

    /**
     * Uzbek (Afghanistan).
     */
    #[Label('Uzbek (Afghanistan)')]
    public const UZ_AF = 'uz_AF';

    /**
     * Uzbek (Arabic, Afghanistan).
     */
    #[Label('Uzbek (Arabic, Afghanistan)')]
    public const UZ_ARAB_AF = 'uz_Arab_AF';

    /**
     * Uzbek (Arabic).
     */
    #[Label('Uzbek (Arabic)')]
    public const UZ_ARAB = 'uz_Arab';

    /**
     * Uzbek (Cyrillic, Uzbekistan).
     */
    #[Label('Uzbek (Cyrillic, Uzbekistan)')]
    public const UZ_CYRL_UZ = 'uz_Cyrl_UZ';

    /**
     * Uzbek (Cyrillic).
     */
    #[Label('Uzbek (Cyrillic)')]
    public const UZ_CYRL = 'uz_Cyrl';

    /**
     * Uzbek (Latin, Uzbekistan).
     */
    #[Label('Uzbek (Latin, Uzbekistan)')]
    public const UZ_LATN_UZ = 'uz_Latn_UZ';

    /**
     * Uzbek (Latin).
     */
    #[Label('Uzbek (Latin)')]
    public const UZ_LATN = 'uz_Latn';

    /**
     * Uzbek (Uzbekistan).
     */
    #[Label('Uzbek (Uzbekistan)')]
    public const UZ_UZ = 'uz_UZ';

    /**
     * Vietnamese (Vietnam).
     */
    #[Label('Vietnamese (Vietnam)')]
    public const VI_VN = 'vi_VN';

    /**
     * Welsh (United Kingdom).
     */
    #[Label('Welsh (United Kingdom)')]
    public const CY_GB = 'cy_GB';

    /**
     * Western Frisian (Netherlands).
     */
    #[Label('Western Frisian (Netherlands)')]
    public const FY_NL = 'fy_NL';

    /**
     * Yoruba.
     */
    #[Label('Yoruba')]
    public const YO = 'yo';

    /**
     * Yoruba (Benin).
     */
    #[Label('Yoruba (Benin)')]
    public const YO_BJ = 'yo_BJ';

    /**
     * Yoruba (Nigeria).
     */
    #[Label('Yoruba (Nigeria)')]
    public const YO_NG = 'yo_NG';

    /**
     * Zulu (South Africa).
     */
    #[Label('Zulu (South Africa)')]
    public const ZU_ZA = 'zu_ZA';
}
