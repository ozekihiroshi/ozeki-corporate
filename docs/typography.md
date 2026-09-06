# Typography strategy

Ozeki Corporate keeps its default typography familiar for an international corporate site. Japanese support is provided as a first-class, selectable Global Style rather than a site-specific CSS patch.

## Default

- Platform-native sans-serif typography.
- Latin-first system font order with Japanese fallbacks.
- Neutral heading proportions suitable for English and mixed content.

## Japanese Refined

- Japanese-first system font order; no downloaded or bundled font files.
- Mincho for paragraph text, reflecting long-form Japanese reading preferences.
- Gothic for headings, navigation, buttons, lists, quotations, and tables.
- Smaller heading ratios than short-English-word display typography.
- Regular-weight Mincho body copy with a generous 1.95 line height.
- Tighter section spacing than the default style so Japanese pages retain a calm,
  information-dense rhythm on both desktop and mobile screens.
- No forced uppercase or artificial letter spacing.

The variation is selected in Appearance > Editor > Styles. Because it is part of the theme’s Global Styles, users do not need to edit theme files and updates do not overwrite a manual typography patch.

## Choosing a typeface while writing

Japanese Refined offers just two font families: `ゴシック体 / Sans` and
`明朝体 / Serif`. Select a paragraph or heading block, then use its Typography
font-family control in the block settings. If the control is hidden, enable it
from the Typography options menu. Leaving the font family unset inherits the
theme default: Mincho paragraphs and Gothic headings. Reset the block's font
family to return to that default. This choice changes presentation, not content.
