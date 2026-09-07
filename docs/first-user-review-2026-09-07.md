# First-user journey review

## Scope

Assess whether a person unfamiliar with Ozeki Corporate can build toward the
accepted demo using the distributed theme and standard WordPress editing tools.
This is a source/documentation walkthrough with existing UI evidence, not an
independent novice-user study or a repeat of the completed design evaluation.
No AWS content, theme activation, release or tag changed during this review.

## Findings by journey

| Stage | Evidence | Finding |
| --- | --- | --- |
| Choose | Existing theme-list capture and screenshot.png show the Japanese Northstar/solar demo; the current hero pattern is English with a team image. | The selection image does not explain the supplied starting point. Align it with reproducible shipped content; retain the Japanese demo as another achievable example. |
| Install | Earlier isolated 8091 ZIP install rendered photo and editable English sections without demo imports. | A usable starting point exists. Do not redo the accepted visual design solely for this review. |
| Start editing | GETTING-STARTED.md describes Front Page template editing; functions.php has no guide/menu/help entry. | A user arriving in Appearance or Pages has no obvious path to the guide. The difference between editing a page and editing the Front Page template needs a visible explanation. |
| Build supporting pages | Eight pattern files are section-level patterns; none declares page starter metadata. | Users must assemble About, Services, Company and Contact pages themselves. Supply coherent page starters rather than relying on developer knowledge or the fixture script. |
| Connect pages | Header uses Home plus a Pages submenu containing core/page-list. | Published pages may enter the list automatically. Guide explicit navigation choices, order, removal of unwanted sample pages and contact destinations. Do not silently delete or overwrite pages. |
| Publish | Shipped guide covers sample replacement, contact setup, image limits and some checks. | A short ordered launch checklist is needed at the same visible guide entry: real content, links, contact delivery where applicable, mobile and placeholder cleanup. |

## What is already demonstrated

Previous isolated ZIP evidence records image/text replacement through the Site
Editor, upload, alternative-text editing, Save, reload and public rendering.
English and mixed Japanese/English text persisted. Mobile company-table wrapping
has been fixed and checked separately. These results support editing capability,
not proof that an unfamiliar user can discover all the operations unaided.

The environment seed-showcase.php creates complete demo pages, navigation,
template overrides and images. It is excluded from the ZIP. WordPress users can
reproduce layouts manually, but the shipped package does not yet offer the same
guided construction path. Do not tell users to run that script.

## Implementation order proposed from this review

1. An optional, read-only guide entry under Appearance, with no forced redirect,
   import, activation wizard, external tracking or automatic content creation.
   Link to the standard editor/pages controls and explain their different roles.
2. Page starter patterns for About, Services, Company and Contact. Use only native
   blocks, editable copy and bundled imagery; no fabricated addresses or form.
   Use core/post-content and page metadata so the editor can offer them while
   creating a page. Avoid duplicate H1/page titles and unavailable link targets.
3. Walk a new local draft through choosing a starter, replacing content, saving,
   reopening and adding a navigation link through standard controls. Record what
   was actually clicked versus tests performed programmatically.
4. Bring the theme selection image and description into agreement with the
   shipped/reproducible starting point; label expanded demo imagery accurately.
5. Finalize version and public-candidate ZIP only after these gaps are addressed.
   Keep release acceptance tied to that artifact; this review is not approval.

## Reference

WordPress's native page starter pattern mechanism:
https://developer.wordpress.org/themes/patterns/starter-patterns/

## Boundaries

An English main experience and Japanese-friendly editing are design requirements,
not reasons to exclude larger organizations or advertise an audience restriction.
Existing demo satisfaction is retained. No promise of pixel-identical results
across OS fonts or a requirement to recreate fictional content verbatim is made.
