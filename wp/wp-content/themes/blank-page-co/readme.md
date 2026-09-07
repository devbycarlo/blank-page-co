# Blank Page Co Theme 🎨

**A cozy, minimal WordPress theme for selling digital products.**

Warm paper vibes. Bold ink outlines. Hard shadow offsets that make everything pop like a risograph print.

---

## What's Inside 🎁

| Feature | Why You'll Love It |
|---------|-------------------|
| 🛒 **Product System** | Sell templates, fonts, graphics — prices, downloads, features built in |
| 🎨 **Cream Paper Design** | Warm tones, crisp borders, signature shadow effects |
| 📱 **Mobile Ready** | Hamburger menu, responsive everything |
| ⚡ **Lightweight** | No page builder, no bloat — just WordPress |
| 🎛️ **Customizer** | Change colors & text without touching code |

---

## Quick Start (5 Minutes) 🚀

### 1. Install

Upload `blank-page-co` to `wp/wp-content/themes/`

### 2. Activate

**Appearance → Themes → Activate**

### 3. Set Homepage

**Settings → Reading → A static page → Select "Home"**

### 4. Create Menu

**Appearance → Menus → Add pages → Save**

### 5. Add Products

**Products → Add New Product → Fill in details → Publish**

Done! 🎉

---

## Adding Products 🛍️

### Where's the Menu?

Look for **Products** in your WordPress sidebar:

```
📝 Posts
📁 Media
📄 Pages
🛒 Products        ← Here!
💬 Comments
⚙️ Settings
```

### Creating a Product

**Step 1: Basic Info**

| Field | What to Type |
|-------|--------------|
| Title | Product name (e.g., "Minimal Templates Pack") |
| Description | Why someone should buy this |
| Excerpt | Short teaser (1-2 sentences) |

**Step 2: Featured Image**

This is your product cover — make it count!

- **Size**: 600 × 600 px (square)
- **Format**: JPG or PNG
- **Style**: Keep it consistent across products

**Step 3: Set the Price 💰**

Scroll down to **"Product Details"**:

```
┌─────────────────────────────────────────────────────┐
│  📦 Product Details                                 │
├─────────────────────────────────────────────────────┤
│                                                     │
│  Price ($) .............. [ 29.00 ]                 │
│                                                     │
│  Sale Price ($) ......... [ 19.00 ]  ← optional     │
│                                                     │
│  Download URL ........... [ https://... ]           │
│                                                     │
│  File Format ............ [ PSD, AI, PDF ]          │
│                                                     │
│  Features ............... [ 20 templates            ]│
│                           [ Fully editable          ]│
│                           [ Works with Canva        ]│
│                                                     │
└─────────────────────────────────────────────────────┘
```

**Price Tips:**
- Just numbers: `29.00` (no $ sign needed)
- Sale price shows original with strikethrough
- Leave sale price empty if no discount

**Download URL Ideas:**
- Gumroad: `https://gumroad.com/l/xyz`
- Google Drive: `https://drive.google.com/file/d/...`
- Dropbox: `https://dl.dropboxusercontent.com/...`

**Features:**
One per line — hit Enter after each:
```
20 minimal page layouts
Fully customizable colors
Works with Canva & Adobe
Instant download
Lifetime access
```

**Step 4: Pick a Category**

Check "Templates" or create your own under **Products → Categories**

**Step 5: Publish** 🚀

---

## Customizer Settings 🎛️

**Appearance → Customize**

### Hero Section

| Setting | Default |
|---------|---------|
| Headline | Your Story Starts Here |
| Subheadline | Premium digital templates and resources for creators |
| Button Text | Browse Collection |
| Button URL | #products |

### Brand Colors

| Setting | Default | What It Affects |
|---------|---------|-----------------|
| Primary | `#1A1A1A` | Buttons, borders, text |
| Accent | `#F5DDA4` | Highlights, badges |
| Background | `#FAF7F0` | Page background |

### Footer

| Setting | Default |
|---------|---------|
| Copyright | All rights reserved. |

---

## Color Palette 🎨

```
┌─────────────────────────────────────────────────────┐
│  Cream Paper Palette                                │
├─────────────────────────────────────────────────────┤
│                                                     │
│  ██████  #FAF7F0  Paper (background)               │
│  ██████  #FFFFFF  Card (white)                      │
│  ██████  #F2EEE4  Soft (subtle)                    │
│  ██████  #F5DDA4  Accent (warm yellow)              │
│  ██████  #1A1A1A  Ink Strong (text/borders)         │
│  ██████  #6B6357  Ink Muted (secondary)             │
│  ██████  #A39A8C  Ink Faint (placeholder)           │
│                                                     │
└─────────────────────────────────────────────────────┘
```

---

## Design System 🎭

### Those Shadows ✨

The signature look? **Hard offset shadows** — no blur, pure ink:

```css
box-shadow: 4px 4px 0 0 #1A1A1A;
```

| Shadow | Size | Use For |
|--------|------|---------|
| `sm` | 2px | Buttons |
| `md` | 4px | Cards (default) |
| `lg` | 6px | Featured items |
| `xl` | 8px | Hero panels |

### Hover Magic ✋

**Hover a card:**
1. Moves **up 2px**
2. Shadow grows to `lg`

**Click a card:**
1. Moves **down 2px** (into the shadow gap)
2. Shadow shrinks to `sm`

Feels like stamping paper. Satisfying!

### Typography

| Element | Size | Weight |
|---------|------|--------|
| Display | 44px | 800 |
| H1 | 32px | 700 |
| H2 | 22px | 700 |
| H3 | 17px | 600 |
| Body | 16px | 400 |
| Small | 14px | 500 |
| Tiny | 11px | 600 |

**Font**: Inter (Google Fonts)

---

## Templates 📄

| Template | File | What It Does |
|----------|------|--------------|
| Front Page | `front-page.php` | Homepage with hero + products |
| Single Product | `single-product.php` | Product detail page |
| Product Archive | `archive-product.php` | Product listing |
| Single Post | `single.php` | Blog post |
| Page | `page.php` | Generic page |
| Search | `search.php` | Search results |
| 404 | `404.php` | Not found page |

---

## File Structure 🔍

```
blank-page-co/
│
├── 📄 style.css              ← Theme metadata
├── ⚙️ functions.php          ← CPT, meta boxes, setup
├── 🏠 header.php             ← Site header
├── 🦶 footer.php             ← Site footer
├── 🏡 front-page.php         ← Homepage
├── 🛒 single-product.php     ← Product detail
├── 📦 archive-product.php    ← Product listing
├── 📝 single.php             ← Blog post
├── 📃 page.php               ← Generic page
├── 🔍 search.php             ← Search results
├── 💀 404.php                ← Not found
├── 🔎 searchform.php         ← Search form
├── 💬 comments.php           ← Comments
├── 📖 readme.md              ← You are here!
│
├── 📁 assets/
│   ├── 🎨 css/
│   │   ├── design-system.css  ← Colors, fonts, spacing
│   │   └── theme.css          ← Component styles
│   └── ⚡ js/
│       └── theme.js           ← Mobile menu, filters, effects
│
├── 📁 template-parts/
│   ├── content.php            ← Post card
│   ├── content-none.php       ← Nothing found
│   ├── content-page.php       ← Page content
│   ├── content-single.php     ← Single post
│   └── content-product-card.php ← Product card
│
└── 📁 inc/
    └── customizer.php         ← Customizer settings
```

---

## Sandbox Widget 🧪

**Development only — hidden in production!**

The sandbox widget automatically appears in the bottom-right corner when you're running WordPress locally or in a development environment.

### What It Shows

| Info | Description |
|------|-------------|
| **DEV Badge** | Yellow pill badge indicating development mode |
| **Host** | Current hostname |
| **WP_DEBUG** | Debug mode status |

### Environment Detection

The widget shows when any of these are true:

- Hostname is `localhost`, `127.0.0.1`, or `::1`
- Domain ends with `.local`, `.dev`, or `.localhost`
- URL includes a port number (e.g., `:8888`, `:3000`)
- `WP_DEBUG` is enabled in `wp-config.php`
- `WP_ENV` environment variable is `local`, `development`, or `dev`

### Hiding in Production

The widget automatically hides when:
- Running on a production domain
- `WP_DEBUG` is `false`
- No local development indicators detected

### Using the Widget Area

1. Go to **Appearance → Widgets**
2. Find **Sandbox Widget** (only visible in dev)
3. Add any widgets you want for development
4. They'll only show in local/dev environments

---

## Tips & Tricks 💡

### Product Images
- **Square** ratio (1:1)
- **600×600px** minimum
- **Consistent style** across all products
- Show the actual product, not just a logo

### Pricing Psychology
- End in `9` or `5`: `$29`, `$49`, `$35`
- Use sale prices sparingly
- Show value, not just cost

### Category Ideas
- Templates
- Branding
- Social Media
- Fonts
- Graphics
- Icons
- Mockups

---

## Keyboard Shortcuts ⌨️

| Key | Action |
|-----|--------|
| `Esc` | Close mobile menu |
| `Tab` | Navigate elements |
| `Enter` | Activate focused element |

---

## Changelog 📋

### v1.1.0 (Current)

**New Features:**
- ✅ Sandbox Widget — development-only widget, hidden in production
- ✅ Environment detection (local/dev vs production)
- ✅ DEV badge indicator on sandbox widget
- ✅ Admin area sandbox filtering

### v1.0.0

**Features:**
- ✅ Cream Paper design system
- ✅ Custom product post type
- ✅ Product categories
- ✅ Price & sale price
- ✅ Download URL
- ✅ Features list
- ✅ Product detail page
- ✅ Product archive
- ✅ Category filtering
- ✅ Mobile navigation
- ✅ Customizer settings
- ✅ Related products
- ✅ Breadcrumbs
- ✅ Trust badges
- ✅ Hover/press effects

**Templates:**
- Front Page
- Single Product
- Product Archive
- Single Post
- Page
- Search
- 404

---

## Support 🆘

1. **This readme** — you're reading it
2. **WordPress Codex** — [developer.wordpress.org](https://developer.wordpress.org)
3. **Just try it** — The customizer is visual, experiment!

---

## License 📜

GPL v2 or later — [gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

**Made with ☕ by Blank Page Co**

*Now go sell something cool!*
