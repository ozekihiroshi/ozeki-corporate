# Typography strategy

Ozeki Corporate keeps its default typography familiar for an international corporate site. Japanese support is provided as a first-class, selectable Global Style rather than a site-specific CSS patch.

## Default

- Platform-native sans-serif typography.
- Latin-first system font order with Japanese fallbacks.
- Neutral heading proportions suitable for English and mixed content.
- A 1.75 body line height balances English readability with mixed-language content.
- A 720px content measure keeps long Japanese lines close to 40–45 full-width characters.

## Japanese Refined

- Japanese-first system font order; no downloaded or bundled font files.
- Mincho for paragraph text, reflecting long-form Japanese reading preferences.
- Gothic for headings, navigation, buttons, lists, quotations, and tables.
- Smaller heading ratios than short-English-word display typography.
- Regular-weight Mincho body copy with a measured 1.9 line height.
- Japanese heading line heights progress from 1.35 to 1.5 so multi-line headings remain distinct without looking cramped.
- The same spacing scale as the default style, so switching styles does not change the underlying layout rhythm.
- No forced uppercase or artificial letter spacing.

The variation is selected in Appearance > Editor > Styles. Because it is part of the theme’s Global Styles, users do not need to edit theme files and updates do not overwrite a manual typography patch.

## Choosing a typeface while writing

Japanese Refined offers just two font families: `ゴシック体 / Sans` and
`明朝体 / Serif`. Select a paragraph or heading block, then use its Typography
font-family control in the block settings. If the control is hidden, enable it
from the Typography options menu. Leaving the font family unset inherits the
theme default: Mincho paragraphs and Gothic headings. Reset the block's font
family to return to that default. This choice changes presentation, not content.

## Spacing discipline

The editor exposes seven spacing presets only: 4, 8, 16, 24, 40, 64 and 96px.
They cover micro adjustments, component interiors, related groups, cards, sections
and major page divisions. Default WordPress spacing presets and arbitrary spacing
values are disabled. Theme templates, patterns and composition classes refer to
the same presets, so editor choices and shipped layouts follow one rhythm.

Arbitrary font sizes and line heights are also disabled. The provided font-size
scale and the two Global Styles remain flexible enough for normal corporate
content while protecting the hierarchy from accidental one-off values.
