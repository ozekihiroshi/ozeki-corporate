# Corporate pattern composition contract

Development specification; the submitted 0.2.3 ZIP is unchanged.

## Shared rules

- Sections use `oc-section`: spacing 60 vertically on desktop, 50 on mobile;
  horizontal spacing 40 on desktop, 30 on mobile. Adjacent sections must not
  acquire an additional block-gap between their backgrounds.
- Reading width is 720px; wide compositions are 1200px. Section headings align
  with the composition below them. The contact callout is intentionally centered.
- Use theme heading and paragraph typography, including Japanese Refined.
  Card headings must not introduce a competing type scale.
- Use H1 only for the homepage hero. Body sections start with H2, items with H3.
  Page starters rely on the page template for their H1.
- White is the default surface, mist separates related sections, navy is reserved
  for a closing contact callout. Do not require alternating backgrounds.
- Images: hero 5:4, story 4:3, service/case cards 16:10. Check subject cropping
  after replacement; portrait images must not imply a fictional person is real.
- No invented contact URL, dead example button, or fabricated endorsement.
  Destination selection and contact setup are explicit publishing steps.
- Patterns are ordinary editable blocks, not a content importer. Existing saved
  pages are not silently rewritten when shipped patterns change.

## Ordered implementation

1. Shared section spacing and type rhythm; validate before visual approval.
2. Complete services, company information and contact patterns; extract process.
3. Add representative message and optional case study patterns.
4. Compose homepage, about and service starters from the same sections.

## Acceptance checks

- Default and Japanese Refined; English and long Japanese text.
- Desktop, 390px and 320px; no clipping or horizontal page overflow.
- White/white, white/mist and mist/navy adjacency without accidental extra gaps.
- Short/long card descriptions and replacement images of different proportions.
- Editor insertion, save, reload and front-end consistency.
- Existing page comments, hierarchical navigation and translation regressions.
- Link destinations must be configured and verified while logged out.

The first implementation step does not complete the remaining pattern roadmap.
