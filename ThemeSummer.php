<?php

namespace Piwik\Plugins\ThemeSummer;

use Piwik\Plugin;

class ThemeSummer extends Plugin
{
    public function registerEvents()
    {
        return [
            'Theme.configureThemeVariables' => 'configureThemeVariables',
        ];
    }

    public function configureThemeVariables(Plugin\ThemeStyles $themeStyles)
    {
        // === BACKGROUNDS — warm sandy whites ===
        $themeStyles->colorBackgroundBase = '#FFF3E0';
        $themeStyles->colorBackgroundContrast = '#ffffff';
        $themeStyles->colorBackgroundHighContrast = '#BF360C';
        $themeStyles->colorBackgroundTinyContrast = '#FFF8E1';
        $themeStyles->colorBackgroundLowContrast = '#FFE0B2';

        // === TEXT — deep warm tones ===
        $themeStyles->colorText = '#3E2723';
        $themeStyles->colorTextLight = '#4E342E';
        $themeStyles->colorTextLighter = '#6D4C41';
        $themeStyles->colorTextContrast = '#BF360C';

        // === BRAND — vibrant coral orange ===
        $themeStyles->colorBrand = '#FF7043';
        $themeStyles->colorBrandContrast = '#ffffff';

        // === SERIES — coral orange for graphs ===
        $themeStyles->colorBaseSeries = '#FF7043';

        // === LINKS — ocean teal ===
        $themeStyles->colorLink = '#00838F';

        // === HEADER — deep sky blue ===
        $themeStyles->colorHeaderBackground = '#0277BD';
        $themeStyles->colorHeaderText = '#ffffff';

        // === HEADLINES ===
        $themeStyles->colorHeadlineAlternative = '#E65100';

        // === BORDERS ===
        $themeStyles->colorBorder = '#FFCC80';

        // === CODE ===
        $themeStyles->colorCode = '#BF360C';
        $themeStyles->colorCodeBackground = '#FFF3E0';

        // === MENU ===
        $themeStyles->colorMenuContrastText = '#4E342E';
        $themeStyles->colorMenuContrastTextSelected = '#3E2723';
        $themeStyles->colorMenuContrastTextActive = '#FF7043';
        $themeStyles->colorMenuContrastBackground = '#ffffff';

        // === WIDGETS ===
        $themeStyles->colorWidgetBackground = '#ffffff';
        $themeStyles->colorWidgetBorder = '#FFE0B2';
        $themeStyles->colorWidgetTitleText = '#3E2723';
        $themeStyles->colorWidgetTitleBackground = '#ffffff';
        $themeStyles->colorWidgetExportedBackgroundBase = '#ffffff';

        // === FOCUS ===
        $themeStyles->colorFocusRing = '#0277BD';
        $themeStyles->colorFocusRingAlternative = '#FF7043';
    }
}
