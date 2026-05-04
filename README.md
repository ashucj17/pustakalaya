<!--
=============================================================
  WORDPRESS IMPLEMENTATION NOTES
=============================================================

HEADER TEMPLATE PART (header.html):
-------------------------------------
Register in theme.json and create /parts/header.html containing:
  - Mobile menu overlay + drawer  (wp:navigation + custom JS)
  - Logo (wp:site-logo)
  - Search bar (wp:search)
  - Desktop navigation (wp:navigation)
  - Shipping notice bar (wp:group > wp:paragraph)

FOOTER TEMPLATE PART (footer.html):
-------------------------------------
Register in theme.json and create /parts/footer.html containing:
  - Newsletter form (wp:group > wp:paragraph + wp:html for email input)
  - Social icons (wp:social-links)
  - Three footer columns (wp:columns > wp:column > wp:heading + wp:list)
  - Footer bottom legal text (wp:paragraph)

THEME.JSON SETUP:
-----------------
{
  "version": 2,
  "settings": {
    "layout": { "contentSize": "1200px", "wideSize": "1400px" }
  },
  "templateParts": [
    { "name": "header", "title": "Header", "area": "header" },
    { "name": "footer", "title": "Footer", "area": "footer" }
  ]
}

PAGE URLS (update hrefs to WordPress slugs):
---------------------------------------------
  new-noteworthy.html  →  /new-noteworthy/
  top-50.html          →  /top-50/
  books.html           →  /books/
  kids.html            →  /kids-books/
  toys-games.html      →  /toys-games/
  stationery-gifts.html→  /stationery-gifts/
  sales.html           →  /sales/
  footer/about/*       →  /about/, /vision/, /support/

CSS CLASSES (add to theme's style.css or child theme):
-------------------------------------------------------
  .pustak-hero                 – Full-width hero section
  .pustak-hero__content        – Centered hero text wrapper
  .pustak-hero__title          – H1 hero heading
  .pustak-hero__text           – Hero paragraph
  .pustak-section              – Generic section padding
  .pustak-section--events      – Events/New & Noteworthy
  .pustak-section--explore     – Explore Science
  .pustak-section--learning    – Learning
  .pustak-section--support     – Support Us (two-col layout)
  .pustak-container            – Max-width inner wrapper (1200px)
  .pustak-section-header       – Section title + subtitle group
  .pustak-cards-grid           – Three-column card grid
  .pustak-card                 – Individual card wrapper
  .pustak-card__image          – Card image (aspect-ratio: 16/9)
  .pustak-card__body           – Card text area
  .pustak-card__date           – Event date label
  .pustak-card__tag            – Category tag badge
  .pustak-support-grid         – Two-column support layout
  .pustak-support__content     – Left text column
  .pustak-support__image-col   – Right image column
  .pustak-btn                  – Base button style
  .pustak-btn--primary         – Hero CTA button
  .pustak-btn--card            – Card "Book now / Read more" button

=============================================================
-->