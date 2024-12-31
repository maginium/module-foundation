<?php

declare(strict_types=1);

namespace Maginium\Foundation\Enums;

use Maginium\Framework\Enum\Attributes\Description;
use Maginium\Framework\Enum\Attributes\Label;
use Maginium\Framework\Enum\Enum;

/**
 * Enum representing common content types.
 *
 * @method static self TEXT_PLAIN() Represents text/plain content type.
 * @method static self APPLICATION_JSON() Represents application/json content type.
 * @method static self APPLICATION_XML() Represents application/xml content type.
 * @method static self APPLICATION_FORM_URL_ENCODED() Represents application/x-www-form-urlencoded content type.
 * @method static self APPLICATION_X_PHP() Represents application/x-php content type.
 * @method static self APPLICATION_VND_HZN_3D_CROSSWORD() Represents application/vnd.hzn-3d-crossword content type.
 * @method static self APPLICATION_VND_MSEQ() Represents application/vnd.mseq content type.
 * @method static self APPLICATION_VND_3M_POST_IT_NOTES() Represents application/vnd.3m.post-it-notes content type.
 * @method static self APPLICATION_VND_3GPP_PIC_BW_LARGE() Represents application/vnd.3gpp.pic-bw-large content type.
 * @method static self APPLICATION_VND_3GPP_PIC_BW_SMALL() Represents application/vnd.3gpp.pic-bw-small content type.
 * @method static self APPLICATION_VND_3GPP_PIC_BW_VAR() Represents application/vnd.3gpp.pic-bw-var content type.
 * @method static self APPLICATION_VND_3GPP2_TCAP() Represents application/vnd.3gpp2.tcap content type.
 * @method static self APPLICATION_X_7Z_COMPRESSED() Represents application/x-7z-compressed content type.
 * @method static self APPLICATION_X_ABIWORD() Represents application/x-abiword content type.
 * @method static self APPLICATION_X_ACE_COMPRESSED() Represents application/x-ace-compressed content type.
 * @method static self APPLICATION_VND_AMERICANDYNAMICS_ACC() Represents application/vnd.americandynamics.acc content type.
 * @method static self APPLICATION_VND_ACUCOBOL() Represents application/vnd.acucobol content type.
 * @method static self APPLICATION_VND_ACUCORP() Represents application/vnd.acucorp content type.
 * @method static self APPLICATION_X_AUTHORWARE_BIN() Represents application/x-authorware-bin content type.
 * @method static self APPLICATION_X_AUTHORWARE_MAP() Represents application/x-authorware-map content type.
 * @method static self APPLICATION_X_AUTHORWARE_SEG() Represents application/x-authorware-seg content type.
 * @method static self APPLICATION_VND_ADOBE_AIR_APPLICATION_INSTALLER_PACKAGE_ZIP() Represents application/vnd.adobe.air-application-installer-package+zip content type.
 * @method static self APPLICATION_X_SHOCKWAVE_FLASH() Represents application/x-shockwave-flash content type.
 * @method static self APPLICATION_VND_ADOBE_FXP() Represents application/vnd.adobe.fxp content type.
 * @method static self APPLICATION_PDF() Represents application/pdf content type.
 * @method static self APPLICATION_VND_CUPS_PPD() Represents application/vnd.cups-ppd content type.
 * @method static self APPLICATION_X_DIRECTOR() Represents application/x-director content type.
 * @method static self APPLICATION_VND_ADOBE_XDP_XML() Represents application/vnd.adobe.xdp+xml content type.
 * @method static self APPLICATION_VND_ADOBE_XFDF() Represents application/vnd.adobe.xfdf content type.
 * @method static self APPLICATION_VND_AHEAD_SPACE() Represents application/vnd.ahead.space content type.
 * @method static self APPLICATION_VND_AIRZIP_FILESECURE_AZF() Represents application/vnd.airzip.filesecure.azf content type.
 * @method static self APPLICATION_VND_AIRZIP_FILESECURE_AZS() Represents application/vnd.airzip.filesecure.azs content type.
 * @method static self APPLICATION_VND_AMAZON_EBOOK() Represents application/vnd.amazon.ebook content type.
 */
class ContentType extends Enum
{
    /**
     * Text plain content type.
     */
    #[Label('Text Plain')]
    #[Description('Represents text/plain content type.')]
    public const TEXT_PLAIN = 'text/plain';

    /**
     * JSON content type.
     */
    #[Label('JSON')]
    #[Description('Represents application/json content type.')]
    public const APPLICATION_JSON = 'application/json';

    /**
     * XML content type.
     */
    #[Label('XML')]
    #[Description('Represents application/xml content type.')]
    public const APPLICATION_XML = 'application/xml';

    /**
     * Form URL encoded content type.
     */
    #[Label('Form URL Encoded')]
    #[Description('Represents application/x-www-form-urlencoded content type.')]
    public const APPLICATION_FORM_URL_ENCODED = 'application/x-www-form-urlencoded';

    /**
     * PHP script file.
     */
    #[Label('PHP')]
    #[Description('Represents application/x-php content type.')]
    public const APPLICATION_X_PHP = 'application/x-php';

    /**
     * 3D Crossword file.
     */
    #[Label('3D Crossword')]
    #[Description('Represents application/vnd.hzn-3d-crossword content type.')]
    public const APPLICATION_VND_HZN_3D_CROSSWORD = 'application/vnd.hzn-3d-crossword';

    /**
     * MSEQ application file.
     */
    #[Label('MSEQ')]
    #[Description('Represents application/vnd.mseq content type.')]
    public const APPLICATION_VND_MSEQ = 'application/vnd.mseq';

    /**
     * 3M Post-It Notes file.
     */
    #[Label('3M Post-It Notes')]
    #[Description('Represents application/vnd.3m.post-it-notes content type.')]
    public const APPLICATION_VND_3M_POST_IT_NOTES = 'application/vnd.3m.post-it-notes';

    /**
     * 3GPP Large Picture file.
     */
    #[Label('3GPP Large Picture')]
    #[Description('Represents application/vnd.3gpp.pic-bw-large content type.')]
    public const APPLICATION_VND_3GPP_PIC_BW_LARGE = 'application/vnd.3gpp.pic-bw-large';

    /**
     * 3GPP Small Picture file.
     */
    #[Label('3GPP Small Picture')]
    #[Description('Represents application/vnd.3gpp.pic-bw-small content type.')]
    public const APPLICATION_VND_3GPP_PIC_BW_SMALL = 'application/vnd.3gpp.pic-bw-small';

    /**
     * 3GPP Variable Picture file.
     */
    #[Label('3GPP Variable Picture')]
    #[Description('Represents application/vnd.3gpp.pic-bw-var content type.')]
    public const APPLICATION_VND_3GPP_PIC_BW_VAR = 'application/vnd.3gpp.pic-bw-var';

    /**
     * 3GPP2 TCAP file.
     */
    #[Label('3GPP2 TCAP')]
    #[Description('Represents application/vnd.3gpp2.tcap content type.')]
    public const APPLICATION_VND_3GPP2_TCAP = 'application/vnd.3gpp2.tcap';

    /**
     * 7-Zip compressed file.
     */
    #[Label('7-Zip Compressed')]
    #[Description('Represents application/x-7z-compressed content type.')]
    public const APPLICATION_X_7Z_COMPRESSED = 'application/x-7z-compressed';

    /**
     * AbiWord document.
     */
    #[Label('AbiWord')]
    #[Description('Represents application/x-abiword content type.')]
    public const APPLICATION_X_ABIWORD = 'application/x-abiword';

    /**
     * ACE archive.
     */
    #[Label('ACE Archive')]
    #[Description('Represents application/x-ace-compressed content type.')]
    public const APPLICATION_X_ACE_COMPRESSED = 'application/x-ace-compressed';

    /**
     * ACCDB Microsoft Access database file.
     */
    #[Label('Microsoft Access')]
    #[Description('Represents application/vnd.americandynamics.acc content type.')]
    public const APPLICATION_VND_AMERICANDYNAMICS_ACC = 'application/vnd.americandynamics.acc';

    /**
     * ACU Corp data.
     */
    #[Label('ACU Corp')]
    #[Description('Represents application/vnd.acucorp content type.')]
    public const APPLICATION_VND_ACUCORP = 'application/vnd.acucorp';

    /**
     * Authorware binary file.
     */
    #[Label('Authorware Binary')]
    #[Description('Represents application/x-authorware-bin content type.')]
    public const APPLICATION_X_AUTHORWARE_BIN = 'application/x-authorware-bin';

    /**
     * Authorware map file.
     */
    #[Label('Authorware Map')]
    #[Description('Represents application/x-authorware-map content type.')]
    public const APPLICATION_X_AUTHORWARE_MAP = 'application/x-authorware-map';

    /**
     * Authorware segment file.
     */
    #[Label('Authorware Segment')]
    #[Description('Represents application/x-authorware-seg content type.')]
    public const APPLICATION_X_AUTHORWARE_SEG = 'application/x-authorware-seg';

    /**
     * Adobe AIR installer package.
     */
    #[Label('Adobe AIR Installer')]
    #[Description('Represents application/vnd.adobe.air-application-installer-package+zip content type.')]
    public const APPLICATION_VND_ADOBE_AIR_APPLICATION_INSTALLER_PACKAGE_ZIP = 'application/vnd.adobe.air-application-installer-package+zip';

    /**
     * Adobe Shockwave Flash file.
     */
    #[Label('Adobe Flash')]
    #[Description('Represents application/x-shockwave-flash content type.')]
    public const APPLICATION_X_SHOCKWAVE_FLASH = 'application/x-shockwave-flash';

    /**
     * Adobe Flex file.
     */
    #[Label('Adobe Flex')]
    #[Description('Represents application/vnd.adobe.fxp content type.')]
    public const APPLICATION_VND_ADOBE_FXP = 'application/vnd.adobe.fxp';

    /**
     * Portable Document Format (PDF).
     */
    #[Label('PDF')]
    #[Description('Represents application/pdf content type.')]
    public const APPLICATION_PDF = 'application/pdf';

    /**
     * CUPS (Common UNIX Printing System) PPD (PostScript Printer Description) file.
     */
    #[Label('CUPS PPD')]
    #[Description('Represents application/vnd.cups-ppd content type.')]
    public const APPLICATION_VND_CUPS_PPD = 'application/vnd.cups-ppd';

    /**
     * Adobe Director file.
     */
    #[Label('Adobe Director')]
    #[Description('Represents application/x-director content type.')]
    public const APPLICATION_X_DIRECTOR = 'application/x-director';

    /**
     * Adobe XML Data Package file.
     */
    #[Label('Adobe XML Data Package')]
    #[Description('Represents application/vnd.adobe.xdp+xml content type.')]
    public const APPLICATION_VND_ADOBE_XDP_XML = 'application/vnd.adobe.xdp+xml';

    /**
     * Adobe XML Forms Data Format (XFDF) file.
     */
    #[Label('Adobe XFDF')]
    #[Description('Represents application/vnd.adobe.xfdf content type.')]
    public const APPLICATION_VND_ADOBE_XFDF = 'application/vnd.adobe.xfdf';

    /**
     * Ahead AIR application.
     */
    #[Label('Ahead AIR')]
    #[Description('Represents application/vnd.ahead.space content type.')]
    public const APPLICATION_VND_AHEAD_SPACE = 'application/vnd.ahead.space';

    /**
     * AirZip FileSECURE AZF file.
     */
    #[Label('AirZip FileSECURE AZF')]
    #[Description('Represents application/vnd.airzip.filesecure.azf content type.')]
    public const APPLICATION_VND_AIRZIP_FILESECURE_AZF = 'application/vnd.airzip.filesecure.azf';

    /**
     * AirZip FileSECURE AZS file.
     */
    #[Label('AirZip FileSECURE AZS')]
    #[Description('Represents application/vnd.airzip.filesecure.azs content type.')]
    public const APPLICATION_VND_AIRZIP_FILESECURE_AZS = 'application/vnd.airzip.filesecure.azs';

    /**
     * Amazon Kindle eBook file.
     */
    #[Label('Amazon Kindle eBook')]
    #[Description('Represents application/vnd.amazon.ebook content type.')]
    public const APPLICATION_VND_AMAZON_EBOOK = 'application/vnd.amazon.ebook';
}
