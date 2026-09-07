# Blank Page Co WordPress Theme

A clean, minimal WordPress theme for digital stores and creative portfolios. Features the Cream Paper design system with warm paper tones, ink-strong outlines, and signature hard offset shadows.

---

## Table of Contents

- [Installation](#installation)
- [Quick Start](#quick-start)
- [Adding Products](#adding-products)
- [Customizing Your Site](#customizing-your-site)
- [Page Templates](#page-templates)
- [Design System](#design-system)
- [Support](#support)

---

## Installation

1. Download the `blank-page-co` theme folder
2. Upload to `wp-content/themes/` via FTP or WordPress admin
3. Go to **Appearance → Themes** in WordPress admin
4. Click **Activate** on "Blank Page Co"

---

## Quick Start

After activation, follow these steps to get your site running:

### Step 1: Set Up Your Homepage
1. Go to **Settings → Reading**
2. Select **"A static page"** for "Your homepage displays"
3. Set **Homepage** to the page using the "Front Page" template
4. Click **Save Changes**

### Step 2: Create Your Menu
1. Go to **Appearance → Menus**
2. Click **"create a new menu"**
3. Add pages: Home, Shop, About, Contact
4. Check **"Primary Menu"** under Display Location
5. Click **Save Menu**

### Step 3: Add Your First Product
1. Go to **Products → Add New** (see detailed guide below)
2. Fill in product details
3. Publish

---

## Adding Products

### Where to Find the Products Menu

After activating the theme, you'll see a new **Products** menu in your WordPress admin sidebar:

```
Dashboard
├── Posts
├── Media
├── Pages
├── Products        ← Click here
│   ├── All Products
│   ├── Add New Product
│   └── Categories
├── Comments
├── Appearance
├── Plugins
├── Users
├── Tools
└── Settings
```

### Creating Your First Product

#### Step 1: Go to Products → Add New Product

Click **Products** in the left sidebar, then click **Add New Product**.

#### Step 2: Fill in the Basic Information

| Field | What to Enter | Example |
|-------|---------------|---------|
| **Product Title** | Name of your digital product | "Minimal Templates Pack" |
| **Content** | Detailed description of the product | "A collection of 20 minimal..." |
| **Excerpt** | Short summary (1-2 sentences) | "Clean, minimal templates for..." |

#### Step 3: Set the Product Image

1. Look for **"Featured Image"** box on the right sidebar
2. Click **"Set featured image"**
3. Upload your product cover image
4. Click **"Set featured image"** button

**Image Tips:**
- Recommended size: 600 x 600 pixels (square)
- Format: JPG or PNG
- Keep images consistent across all products

#### Step 4: Set the Price (Important!)

Scroll down below the content editor to find the **"Product Details"** box:

```
┌─────────────────────────────────────────────────────────┐
│ Product Details                                         │
├─────────────────────────────────────────────────────────┤
│                                                         │
│ Price ($)          [  29.00  ]                          │
│                                                         │
│ Sale Price ($)     [         ]                          │
│                                                         │
│ Download URL       [  https://your-site.com/file.zip ]  │
│                                                         │
│ File Format        [  ZIP, PDF, PSD  ]                  │
│                                                         │
│ Features           [  20 minimal templates             ] │
│                    [  Fully customizable               ] │ │
│                    [  Works with Canva & Adobe         ] │ │
│                    [  Instant download                 ] │ │
│                                                         │
└─────────────────────────────────────────────────────────┘
```

**Field Descriptions:**

| Field | Description | Example |
|-------|-------------|---------|
| **Price ($)** | Regular price (numbers only) | `29.00` |
| **Sale Price ($)** | Discounted price (leave empty if no sale) | `19.00` |
| **Download URL** | Link to download the file after purchase | `https://gumroad.com/l/xyz` |
| **File Format** | What format the files are in | `PSD, AI, PDF` |
| **Features** | List of what's included (one per line) | See below |

**Features Format:**
Enter each feature on a new line:
```
20 minimal page layouts
Fully customizable colors
Works with Canva & Adobe
Instant download
Lifetime access
Free updates
```

#### Step 5: Assign a Category

1. Look for **"Product Categories"** box on the right sidebar
2. Check an existing category or click **"+ Add New Product Category"**
3. Common categories: Templates, Branding, Social Media, Fonts, Graphics

#### Step 6: Publish

Click the **"Publish"** button (top right).

---

### Product Categories

Organize your products with categories:

1. Go to **Products → Categories**
2. Fill in:
   - **Name**: Templates, Branding, Social Media, etc.
   - **Slug**: lowercase-with-dashes (optional)
   - **Description**: Brief description (optional)
3. Click **"Add New Category"**

---

## Customizing Your Site

### Access the Customizer

Go to **Appearance → Customize** to access theme settings.

### Available Settings

#### Hero Section
| Setting | Description | Default |
|---------|-------------|---------|
| Hero Headline | Main text on homepage | "Your Story Starts Here" |
| Hero Subheadline | Text below headline | "Premium digital templates..." |
| Hero Button Text | Call-to-action button | "Browse Collection" |
| Hero Button URL | Where the button links to | #products |

#### Brand Colors
| Setting | Description | Default |
|---------|-------------|---------|
| Primary Color | Main brand color (buttons, text) | #1A1A1A |
| Accent Color | Highlight color (accents, badges) | #F5DDA4 |
| Background Color | Page background | #FAF7F0 |

#### Footer Settings
| Setting | Description | Default |
|---------|-------------|---------|
| Footer Copyright | Text at bottom of footer | "All rights reserved." |

---

## Page Templates

Create pages with specific templates:

1. Go to **Pages → Add New**
2. In the **Page Attributes** box (right sidebar), select a template:
   - **Default Template** — Standard page
   - **Front Page** — Homepage with hero + products
   - **Full Width** — No sidebar

---

## Design System

### Colors
- **Paper**: `#FAF7F0` — Page background
- **Card**: `#FFFFFF` — Card backgrounds
- **Soft**: `#F2EEE4` — Subtle backgrounds
- **Accent**: `#F5DDA4` — Yellow highlights
- **Ink Strong**: `#1A1A1A` — Primary text, borders
- **Ink Default**: `#2A2622` — Body text
- **Ink Muted**: `#6B6357` — Secondary text

### Typography
- **Font**: Inter (Google Fonts)
- **Headings**: Bold, tight line-height
- **Body**: Regular weight, loose line-height

### Components
- **Buttons**: 2px solid borders, hard offset shadows on hover
- **Cards**: White background, bold borders, rounded corners
- **Inputs**: Clean borders, focus ring on active

---

## File Structure

```
blank-page-co/
├── style.css                    # Theme metadata
├── functions.php                # Theme setup & custom post types
├── header.php                   # Site header
├── footer.php                   # Site footer
├── front-page.php               # Homepage template
├── single-product.php           # Product detail page
├── archive-product.php          # Product listing page
├── index.php                    # Blog/posts template
├── page.php                     # Generic page
├── single.php                   # Single post
├── 404.php                      # 404 error page
├── search.php                   # Search results
├── searchform.php               # Search form
├── comments.php                 # Comments template
├── assets/
│   ├── css/
│   │   ├── design-system.css    # CSS custom properties
│   │   └── theme.css            # Component styles
│   └── js/
│       └── theme.js             # Mobile menu & interactions
├── template-parts/
│   ├── content.php              # Post content partial
│   ├── content-none.php         # No results partial
│   ├── content-page.php         # Page content partial
│   ├── content-single.php       # Single post partial
│   └── content-product-card.php # Product card partial
└── inc/
    └── customizer.php           # Customizer settings
```

---

## Changelog

### Version 1.0.0
- Initial release
- Cream Paper design system
- Custom Product post type with meta fields
- Responsive mobile navigation
- Product detail page with gallery, pricing, features
- Product archive with category filtering
- Customizer settings for hero, colors, footer
- Related products section
- Breadcrumb navigation
- Hard offset shadow design system

---

## Support

For questions or issues:
- Check this readme first
- Review the code comments in each template file
- Visit the theme customizer for visual settings

---

## Credits

- **Design System**: Cream Paper
- **Font**: Inter by Rasmus Andersson
- **Icons**: SVG (custom)

---

*Theme by Blank Page Co*
