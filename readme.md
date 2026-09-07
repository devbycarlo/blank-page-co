# Blank Page Co

A clean, minimal WordPress theme for digital stores and creative portfolios. Built with the Cream Paper design system — warm paper tones, ink-strong outlines, and signature hard offset shadows.

---

## Features

- **Custom Product Post Type** — Add products with pricing, download URLs, features
- **Product Categories** — Organize products with taxonomy
- **Cream Paper Design System** — Warm, minimal aesthetic with hard offset shadows
- **Responsive Design** — Mobile-first with hamburger menu
- **Customizer Settings** — Hero section, brand colors, footer
- **Product Detail Pages** — Gallery, pricing, features list, related products
- **Category Filtering** — Filter products on homepage and archive
- **Inter Font** — Clean, modern typography from Google Fonts

---

## Installation

### Manual Install

1. Download the `blank-page-co` theme folder
2. Upload to `wp/wp-content/themes/blank-page-co/`
3. Activate via **Appearance → Themes** in WordPress admin

### Directory Structure

```
wp/
└── wp-content/
    └── themes/
        └── blank-page-co/
            ├── style.css
            ├── functions.php
            ├── header.php
            ├── footer.php
            ├── front-page.php
            ├── single-product.php
            ├── archive-product.php
            ├── index.php
            ├── page.php
            ├── single.php
            ├── 404.php
            ├── search.php
            ├── searchform.php
            ├── comments.php
            ├── readme.md
            ├── assets/
            │   ├── css/
            │   │   ├── design-system.css
            │   │   └── theme.css
            │   └── js/
            │       └── theme.js
            ├── template-parts/
            │   ├── content.php
            │   ├── content-none.php
            │   ├── content-page.php
            │   ├── content-single.php
            │   └── content-product-card.php
            └── inc/
                └── customizer.php
```

---

## Quick Start

### 1. Activate the Theme

1. Go to **Appearance → Themes**
2. Click **Activate** on "Blank Page Co"

### 2. Set Up Homepage

1. Create a page named "Home"
2. Go to **Settings → Reading**
3. Set "Your homepage displays" to **A static page**
4. Select "Home" as the Homepage
5. Save changes

### 3. Create Menu

1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages: Home, Shop, About
4. Check **Primary Menu** under Display Location
5. Save

### 4. Add Products

1. Go to **Products → Add New Product**
2. Fill in title, description, featured image
3. Set price in **Product Details** meta box
4. Assign a category
5. Publish

---

## Custom Post Type: Products

The theme registers a `product` post type with:

| Feature | Details |
|---------|---------|
| Slug | `/product/` |
| Archive | `/product/` |
| Admin Menu | Products (with cart icon) |
| REST API | Enabled |
| Supports | Title, Editor, Thumbnail, Excerpt, Custom Fields |

### Product Meta Fields

| Field | Meta Key | Description |
|-------|----------|-------------|
| Price | `_bpco_product_price` | Regular price ($) |
| Sale Price | `_bpco_product_sale_price` | Discounted price ($) |
| Download URL | `_bpco_product_download_url` | Link to download file |
| File Format | `_bpco_product_file_format` | e.g., PSD, AI, PDF, ZIP |
| Features | `_bpco_product_features` | One feature per line |

### Product Categories

Custom taxonomy `product_category` with:
- Hierarchical (like categories)
- REST API enabled
- Admin column display

---

## Customizer Settings

Go to **Appearance → Customize**:

### Hero Section

| Setting | Default |
|---------|---------|
| Hero Headline | Your Story Starts Here |
| Hero Subheadline | Premium digital templates and resources for creators |
| Hero Button Text | Browse Collection |
| Hero Button URL | #products |

### Brand Colors

| Setting | Default |
|---------|---------|
| Primary Color | #1A1A1A |
| Accent Color | #F5DDA4 |
| Background Color | #FAF7F0 |

### Footer

| Setting | Default |
|---------|---------|
| Footer Copyright | All rights reserved. |

---

## Design System

### Colors

| Name | Hex | Usage |
|------|-----|-------|
| Paper | `#FAF7F0` | Page background |
| Card | `#FFFFFF` | Card backgrounds |
| Soft | `#F2EEE4` | Subtle backgrounds |
| Accent | `#F5DDA4` | Yellow highlights |
| Accent 2 | `#FFE9B5` | Softer yellow |
| Ink Strong | `#1A1A1A` | Primary text, borders |
| Ink Default | `#2A2622` | Body text |
| Ink Muted | `#6B6357` | Secondary text |
| Ink Faint | `#A39A8C` | Placeholder text |

### Typography

- **Font**: Inter (Google Fonts)
- **Display**: 44px / 800 weight
- **H1**: 32px / 700 weight
- **H2**: 22px / 700 weight
- **H3**: 17px / 600 weight
- **Body**: 16px / 400 weight
- **Small**: 14px / 500 weight
- **Tiny**: 11px / 600 weight / uppercase

### Spacing (4px base)

| Token | Value |
|-------|-------|
| s-1 | 4px |
| s-2 | 8px |
| s-3 | 12px |
| s-4 | 16px |
| s-6 | 24px |
| s-8 | 32px |
| s-12 | 48px |
| s-16 | 64px |

### Shadows (Hard Offset)

| Token | Value | Usage |
|-------|-------|-------|
| shadow-offset-sm | 2px 2px 0 0 ink | Buttons, chips |
| shadow-offset-md | 4px 4px 0 0 ink | Cards (default) |
| shadow-offset-lg | 6px 6px 0 0 ink | Featured cards |
| shadow-offset-xl | 8px 8px 0 0 ink | Hero panels |

### Border Radius

| Token | Value | Usage |
|-------|-------|-------|
| r-sm | 6px | Inputs |
| r-md | 10px | Buttons |
| r-lg | 14px | Cards |
| r-xl | 20px | Panels |
| r-pill | 999px | Badges |

---

## Templates

| Template | File | Usage |
|----------|------|-------|
| Front Page | `front-page.php` | Homepage with hero + products |
| Single Product | `single-product.php` | Product detail page |
| Product Archive | `archive-product.php` | Product listing |
| Single Post | `single.php` | Blog post |
| Page | `page.php` | Generic page |
| Search | `search.php` | Search results |
| 404 | `404.php` | Not found page |

---

## JavaScript Features

**theme.js** handles:

- Mobile menu toggle (hamburger)
- Product category filtering
- Smooth scroll for anchor links
- Product card hover/press effects
- Button hover/press effects
- Keyboard accessibility (Escape to close menu)

---

## Changelog

### Version 1.0.0 (Current)

**Features:**
- Cream Paper design system implementation
- Custom Product post type with meta boxes
- Product Category taxonomy
- Single product detail page template
- Product archive page template
- Product card template part
- Front page with hero section, featured cards, product grid
- Responsive mobile navigation
- Category filtering on product grids
- Customizer settings (hero, colors, footer)
- Custom image sizes (600x600 product, 1920x800 hero)
- Widget areas (sidebar, footer)
- Breadcrumb navigation on product pages
- Related products section
- Trust badges (instant download, secure payment, lifetime access)
- Product features checklist
- Sale price display with strikethrough

**Templates:**
- `front-page.php` — Homepage
- `single-product.php` — Product detail
- `archive-product.php` — Product archive
- `single.php` — Single post
- `page.php` — Generic page
- `index.php` — Blog/posts archive
- `404.php` — Error page
- `search.php` — Search results
- `searchform.php` — Search form
- `comments.php` — Comments
- `header.php` — Site header
- `footer.php` — Site footer

**Template Parts:**
- `content.php` — Post content
- `content-none.php` — No results
- `content-page.php` — Page content
- `content-single.php` — Single post content
- `content-product-card.php` — Product card

**Assets:**
- `design-system.css` — CSS custom properties
- `theme.css` — Component styles
- `theme.js` — Interactive features

**Customizer:**
- Hero section settings
- Brand colors
- Footer copyright

---

## Credits

- **Design System**: Cream Paper
- **Font**: Inter by Rasmus Andersson
- **Icons**: Custom SVG
- **Based on**: ServerlessWP (WordPress serverless framework)

---

## License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html

---

*Theme by Blank Page Co*
