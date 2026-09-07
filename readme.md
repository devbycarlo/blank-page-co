# Blank Page Co ✨

**Your digital products deserve a beautiful home.**

A clean, minimal WordPress theme for selling digital products. Think cozy paper vibes, bold ink outlines, and those satisfying hard shadow offsets that make everything pop.

---

## What You're Getting 🎁

| Feature | Why It's Cool |
|---------|---------------|
| 🛒 **Product System** | Sell templates, fonts, graphics — with prices, downloads, and features built right in |
| 🎨 **Cream Paper Design** | Warm tones, crisp borders, and that signature "riso print" shadow effect |
| 📱 **Mobile Ready** | Looks great on phones, tablets, and massive monitors |
| ⚡ **No Bloat** | Just the essentials — no page builder required |
| 🎛️ **Easy Customizer** | Change colors, hero text, and footer without touching code |

---

## Getting Started (5 Minutes Max) 🚀

### Step 1: Drop It In

Upload the `blank-page-co` folder to:
```
wp/wp-content/themes/
```

### Step 2: Activate

**Appearance → Themes → Activate "Blank Page Co"**

### Step 3: Set Your Homepage

1. Create a page called "Home"
2. Go to **Settings → Reading**
3. Pick **"A static page"**
4. Select "Home"
5. Done! 🎉

### Step 4: Add Some Products

**Products → Add New Product**

That's it. Seriously. Keep reading for the fun details.

---

## Adding Products (The Fun Part) 🛍️

### Where's the Products Menu?

After activation, you'll see this in your sidebar:

```
📝 Posts
📁 Media
📄 Pages
🛒 Products        ← Right here!
💬 Comments
⚙️ Settings
```

### Creating Your First Product

**1. Give it a name**
Type something catchy in the title field. "Minimal Templates Pack" > "Product 1"

**2. Add a description**
Tell people why they need this. Sell the dream!

**3. Set a featured image**
This is your product cover. Make it pretty.
- **Size**: 600 x 600 pixels (square)
- **Format**: JPG or PNG

**4. Set the Price 💰**

Scroll down to find the **"Product Details"** box:

```
┌─────────────────────────────────────────────────────┐
│  📦 Product Details                                 │
├─────────────────────────────────────────────────────┤
│                                                     │
│  Price ($) .............. [ 29.00 ]                 │
│                                                     │
│  Sale Price ($) ......... [ 19.00 ]  ← optional!    │
│                                                     │
│  Download URL ........... [ https://... ]           │
│                                                     │
│  File Format ............ [ PSD, AI, PDF ]          │
│                                                     │
│  Features ............... [ What's inside:          ]│
│                           [ 20 templates            ]│
│                           [ Fully editable          ]│
│                           [ Works with Canva        ]│
│                                                     │
└─────────────────────────────────────────────────────┘
```

**Price Tips:**
- Regular price: `29.00` (just numbers, no $ sign)
- Sale price: `19.00` (shows crossed-out original price)
- Leave sale price empty if there's no discount

**Download URL Ideas:**
- Gumroad: `https://gumroad.com/l/yourproduct`
- Google Drive: `https://drive.google.com/file/d/...`
- Dropbox: `https://dl.dropboxusercontent.com/...`

**Features Format:**
Just hit Enter after each one:
```
20 minimal page layouts
Fully customizable colors
Works with Canva & Adobe
Instant download
Lifetime access
```

**5. Pick a Category**
Check "Templates" or "Branding" — or create your own!

**6. Hit Publish** 🚀

---

## Making It Pretty 🎨

### Change the Hero Text

**Appearance → Customize → Hero Section**

| What | Where It Shows Up |
|------|-------------------|
| Headline | Big text at the top of homepage |
| Subheadline | Smaller text below |
| Button Text | "Browse Collection" etc. |
| Button URL | Where the button goes |

### Change the Colors

**Appearance → Customize → Brand Colors**

| Color | What It Affects | Default |
|-------|-----------------|---------|
| Primary | Buttons, borders, text | `#1A1A1A` (black) |
| Accent | Highlights, badges | `#F5DDA4` (warm yellow) |
| Background | Page background | `#FAF7F0` (cream) |

### Color Palette Cheat Sheet

```
┌─────────────────────────────────────────────────────┐
│  🎨 Cream Paper Palette                            │
├─────────────────────────────────────────────────────┤
│                                                     │
│  ██████  #FAF7F0  Paper (background)               │
│  ██████  #FFFFFF  Card (white)                      │
│  ██████  #F2EEE4  Soft (subtle gray)               │
│  ██████  #F5DDA4  Accent (warm yellow)              │
│  ██████  #1A1A1A  Ink Strong (text/borders)         │
│  ██████  #6B6357  Ink Muted (secondary text)        │
│                                                     │
└─────────────────────────────────────────────────────┘
```

---

## Page Templates 📄

When creating a new page, pick a template from the **Page Attributes** box:

| Template | What It Does |
|----------|--------------|
| **Front Page** | Homepage with hero + product grid |
| **Default Template** | Regular page with content |
| **Full Width** | No sidebar, full width content |

---

## File Structure (For the Curious) 🔍

```
blank-page-co/
│
├── 📄 style.css              ← Theme info
├── ⚙️ functions.php          ← The magic (CPT, meta boxes, etc.)
├── 🏠 header.php             ← Site header
├── 🦶 footer.php             ← Site footer
├── 🏡 front-page.php         ← Homepage
├── 🛒 single-product.php     ← Product detail page
├── 📦 archive-product.php    ← Product listing
├── 📝 single.php             ← Blog post
├── 📃 page.php               ← Generic page
├── 🔍 search.php             ← Search results
├── 💀 404.php                ← Oops page
│
├── 📁 assets/
│   ├── 🎨 css/
│   │   ├── design-system.css  ← Colors, fonts, spacing
│   │   └── theme.css          ← All the styles
│   └── ⚡ js/
│       └── theme.js           ← Mobile menu, filters, hover effects
│
├── 📁 template-parts/
│   ├── content.php            ← Post card
│   ├── content-none.php       ← "Nothing found"
│   ├── content-page.php       ← Page content
│   ├── content-single.php     ← Single post
│   └── content-product-card.php ← Product card (used in grids)
│
└── 📁 inc/
    └── customizer.php         ← Customizer settings
```

---

## The Design System 🎭

### Those Shadows Though

The signature look? **Hard offset shadows** — no blur, just pure ink:

```css
/* The vibe */
box-shadow: 4px 4px 0 0 #1A1A1A;
```

| Shadow | Size | Use For |
|--------|------|---------|
| `sm` | 2px | Buttons |
| `md` | 4px | Cards (default) |
| `lg` | 6px | Featured items |
| `xl` | 8px | Hero panels |

### Hover Effect

When you hover a card:
1. It moves **up 2px**
2. Shadow grows from `md` to `lg`

Click it:
1. It moves **down 2px** (into the shadow gap)
2. Shadow shrinks to `sm`

Feels physical. Like stamping paper. ✋

### Typography

- **Font**: Inter (clean, modern)
- **Headings**: Bold, tight line-height
- **Body**: Regular, loose line-height
- **Mono**: JetBrains Mono (for code/stats)

---

## Keyboard Shortcuts ⌨️

| Key | Action |
|-----|--------|
| `Esc` | Close mobile menu |
| `Tab` | Navigate interactive elements |
| `Enter` | Activate focused element |

---

## Tips & Tricks 💡

### Best Product Images
- **Square** (1:1 ratio)
- **600x600px** minimum
- **Consistent style** across all products
- Show the product, not just a logo

### Pricing Psychology
- End prices in `9` or `5` → `$29`, `$49`, `$35`
- Use sale prices sparingly → creates urgency
- Show the value, not just the cost

### Category Ideas
- Templates
- Branding
- Social Media
- Fonts
- Graphics
- Icons
- Mockups

---

## Need Help? 🆘

1. **Check this readme** — you are here
2. **WordPress Codex** — [developer.wordpress.org](https://developer.wordpress.org)
3. **Customizer** — Most settings are visual, just try it

---

## Changelog 📋

### v1.0.0 (Current Release)

**The Good Stuff:**
- ✅ Cream Paper design system
- ✅ Custom product post type
- ✅ Product categories
- ✅ Price & sale price fields
- ✅ Download URL field
- ✅ Features list
- ✅ Product detail page
- ✅ Product archive page
- ✅ Category filtering
- ✅ Responsive mobile menu
- ✅ Customizer settings
- ✅ Related products
- ✅ Breadcrumb navigation
- ✅ Trust badges
- ✅ Hover/press effects

**Templates Included:**
- Front Page
- Single Product
- Product Archive
- Single Post
- Page
- Search
- 404

---

## License 📜

GPL v2 or later — [gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

**Made with ☕ by Blank Page Co**

*Now go sell something cool!*
