=== Ozeki Corporate ===
Contributors: ozekihiroshi
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 8.1
Version: 0.1.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A lightweight corporate block theme for international websites, designed with first-class Japanese typography.

== Description ==

Ozeki Corporate is a general-purpose block theme for companies, professional services, consultants, technical organizations, and other business websites.

The theme uses native WordPress blocks, templates, patterns, and Global Styles. It does not include business logic, proprietary blocks, a page builder, remote fonts, analytics, or external runtime dependencies.

English is the reference language. Japanese is a first-class validation language, with deliberate system-font fallbacks, heading proportions, line heights, wrapping, and spacing for Japanese and mixed-language content.

The default style follows familiar international corporate typography. The optional Japanese Refined style variation uses Japanese-first system font stacks, restrained heading sizes, generous line height, Mincho body text, and Gothic headings and navigation. Select it from Appearance > Editor > Styles without editing theme files.

== Installation ==

1. Upload the theme ZIP from Appearance > Themes > Add New > Upload Theme.
2. Activate Ozeki Corporate.
3. Open Appearance > Editor to configure the site logo, navigation, colors, typography, templates, and patterns.
4. Replace all example pattern content and links before publishing.
5. Open Appearance > Ozeki Corporate Guide for optional setup guidance.

The guide links to standard WordPress screens and makes no automatic changes.
When adding a page, choose an Ozeki Corporate About, Services, Company or Contact
starter, or find it in the Patterns inserter. These are editable native blocks,
not a demo import. GETTING-STARTED.md includes navigation and launch checklists
in English and Japanese. Adding a contact starter does not install a form.

== Frequently Asked Questions ==

= How do I make the starter page my own? =

Open Appearance > Editor and edit the Front Page template. Use List View to
select a heading, paragraph or image. Select the image and use Replace to upload
or choose your own photograph, then update its alternative text. Save your
changes and check the public page on desktop and mobile.

Set your site title and logo, replace the example business copy, and create your
own pages before adding them to Navigation. Contact forms require a suitable
plugin; the theme does not send inquiries. Example content is not a claim about
your business. Remove the example disclosure after replacing that content.

The starter image is bundled locally. No demo pages or media-library entries
are automatically created. Japanese Refined changes typography, not language;
you can replace the English example text with your own Japanese text.

= How do I connect the contact section? =

The starter's "Start a conversation" section contains example text, not a form
or a working contact link. First create and publish your Contact page with the
contact details you intend to make public, or a form supplied by a suitable
plugin. Open Appearance > Editor > Templates > Front Page. Select the contact
section in List View, add a Buttons block and name its button "Contact us".
Select the button's Link control, search for your published Contact page and
apply the link. If only content fields are available, choose Edit pattern first.
Save, open the public homepage and check the button while logged out.

Alternatively, link a button to mailto: followed by your real business email.
This opens the visitor's configured mail app; it does not send a message itself.
Do not publish example addresses or leave a button without a destination. If
using a form plugin, separately test submission and actual email delivery.

= What if my replacement image will not upload? =

Check the maximum upload size shown in Media > Add New Media File. The limit
depends on your hosting/PHP configuration (and possibly multisite or other
server limits), not this theme. The clean test environment allowed 2 MB; this
is an example, not a requirement or a theme-imposed limit. Reduce the image's
file size or ask your hosting administrator for help. Renaming a file extension
does not reduce its size. Do not assume the theme can raise server limits.

Select the Image block, choose Replace > Upload or Open Media Library, and wait
for upload and image processing to finish. Then set Alternative text, Save and
reload the page. A decorative image may have empty alternative text. The starter
hero displays images in a 5:4 frame with cropping; keep the important subject
near the centre and check desktop and mobile. Keep your original image separately.

Step-by-step English and Japanese instructions: GETTING-STARTED.md in the theme.
Official reference: https://wordpress.org/documentation/article/image-block/
Official reference: https://wordpress.org/documentation/article/link-editing/

= Does the theme require a plugin? =

No. The theme uses WordPress core blocks and does not require a page builder or companion plugin.

= Does the theme load fonts or assets from a CDN? =

No. It uses local system font stacks and WordPress core assets.

= Is this theme limited to Japanese websites? =

No. It is international by default. Japanese typography and responsive behavior are tested as first-class requirements.

= How do I enable the Japanese typography? =

Open Appearance > Editor > Styles, browse the available styles, and select Japanese Refined. The choice is stored by WordPress and is not implemented as a modification to theme files.

= Where should forms, SEO, analytics, and custom content types be implemented? =

Use WordPress core or suitable plugins. These features are intentionally outside the theme’s presentation responsibility.

== Copyright and Resources ==

Ozeki Corporate, Copyright 2026 Hiroshi Ozeki.
Ozeki Corporate is distributed under the GNU General Public License v2 or later.
See LICENSE for the complete license text.

Theme code and design: Hiroshi Ozeki, GPL-2.0-or-later.
Source: https://github.com/ozekihiroshi/ozeki-corporate

screenshot.png: theme rendered with fictional demonstration content,
Copyright 2026 Hiroshi Ozeki, GPL-2.0-or-later. The illustrative photographs
shown in the screenshot were generated with OpenAI image generation and do not
depict actual staff, customers, or projects. Original assets and generation
prompts are recorded at:
https://github.com/ozekihiroshi/corporate-theme-rescue/tree/main/scripts/assets

assets/images/team.png: locally bundled AI-generated starter illustration,
distributed under GPL-2.0-or-later. See assets/images/README.txt for provenance
and replacement instructions. It does not depict actual staff or customers.

No font files, third-party JavaScript libraries, stock photographs, or remote
runtime assets are bundled. Fonts use the visitor's operating-system font stack.
Demonstration content is not automatically installed or imported by the theme.

== Changelog ==

= 0.1.0 =
* Initial release with native block templates, patterns, and Japanese Refined styles.
* Responsive classic content, distinct page landmarks, and classic post pagination.
