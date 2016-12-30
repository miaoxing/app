<?php

namespace Miaoxing\App\Service;

use miaoxing\plugin\BaseService;
use Wei\RetTrait;
use Wei\Session;

/**
 * Class Captcha
 * @property Session $session
 */
class Captcha extends BaseService
{
    use RetTrait;

    /**
     * @var int the width of the generated CAPTCHA image. Defaults to 120
     */
    protected $width = 75;

    /**
     * @var int the height of the generated CAPTCHA image. Defaults to 50
     */
    protected $height = 32;

    /**
     * @var int padding around the text. Defaults to 2
     */
    protected $padding = 2;

    /**
     * @var int the background color. For example, 0x55FF00.
     * Defaults to 0xFFFFFF, meaning white color
     */
    protected $backColor = 0xFFFFFF;

    /**
     * @var int the font color. For example, 0x55FF00. Defaults to 0x2040A0 (blue color)
     */
    protected $foreColor = 0x2040A0;

    /**
     * @var bool whether to use transparent background. Defaults to false
     */
    protected $transparent = false;

    /**
     * @var int the offset between characters. Defaults to -2. You can adjust this property
     * in order to decrease or increase the readability of the captcha
     */
    protected $offset = -2;

    /**
     * @var string the TrueType font file. This can be either a file path or path alias
     */
    protected $fontFile = '../../resources/fonts/SpicyRice.ttf';

    public function render()
    {
        $this->session['captcha'] = wei()->random->string(4);

        return $this->renderImageByGD($this->session['captcha']);
    }

    /**
     * @param string $code
     * @return string
     * @see yiiCaptchaAction
     */
    public function renderImageByGD($code)
    {
        $fontFile = __DIR__ . '/' . $this->fontFile;

        $image = imagecreatetruecolor($this->width, $this->height);

        $backColor = imagecolorallocate(
            $image,
            (int) ($this->backColor % 0x1000000 / 0x10000),
            (int) ($this->backColor % 0x10000 / 0x100),
            $this->backColor % 0x100
        );
        imagefilledrectangle($image, 0, 0, $this->width, $this->height, $backColor);
        imagecolordeallocate($image, $backColor);

        if ($this->transparent) {
            imagecolortransparent($image, $backColor);
        }

        $foreColor = imagecolorallocate(
            $image,
            (int) ($this->foreColor % 0x1000000 / 0x10000),
            (int) ($this->foreColor % 0x10000 / 0x100),
            $this->foreColor % 0x100
        );

        $length = strlen($code);
        $box = imagettfbbox(30, 0, $fontFile, $code);
        $width = $box[4] - $box[0] + $this->offset * ($length - 1);
        $height = $box[1] - $box[5];
        $scale = min(($this->width - $this->padding * 2) / $width, ($this->height - $this->padding * 2) / $height);
        $x = 10;
        $y = round($this->height * 27 / 40);
        for ($i = 0; $i < $length; ++$i) {
            $fontSize = (int) (rand(26, 32) * $scale * 0.8);
            $angle = rand(-10, 10);
            $letter = $code[$i];
            $box = imagettftext($image, $fontSize, $angle, $x, $y, $foreColor, $fontFile, $letter);
            $x = $box[2] + $this->offset;
        }

        imagecolordeallocate($image, $foreColor);

        ob_start();
        imagepng($image);
        imagedestroy($image);

        return ob_get_clean();
    }

    public function getCode()
    {
        return $this->session['captcha'];
    }

    public function check($code)
    {
        if (!$code) {
            return $this->err('请输入验证码', -1);
        }

        if (strcasecmp($code, $this->session['captcha']) !== 0) {
            unset($this->session['captcha']);

            return $this->err('验证码不正确', -2);
        }

        return $this->suc('通过验证');
    }
}
