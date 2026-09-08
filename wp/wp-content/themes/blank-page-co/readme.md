# Blank Page Co 🎨

**A cozy, minimal WordPress theme for selling digital products.**

Warm paper vibes. Bold ink lines. Hard shadows that pop like a risograph print. No bloat, no page builder — just your products looking great.

---

## Quick Start (5 minutes) ⚡

1. Drop the `blank-page-co` folder into `wp/wp-content/themes/`
2. **Appearance → Themes → Activate**
3. **Settings → Reading** → pick "A static page" → select your **Home** page
4. **Add products** → **Products → Add New** 🛒

Done. Seriously. That's it.

---

## Adding Products 🛍️

**Products** shows up in your wp-admin sidebar. Click it → **Add New** and work your way down the editor:

### 1. Title
Something catchy. "Minimal Templates Pack" sells a lot better than "Untitled v4". 

### 2. Main description
The body editor. This is your sales pitch — what it is, who it's for, why they'd be silly not to buy it. This shows on the product page under **"Product Details"**.

### 3. Excerpt
A short teaser (1–2 sentences). Shows up right under the price, above the fold. Make it count.

### 4. Featured image 🖼️
Your product cover. The one thing that decides "ooh" vs "skip".

- **Square**: 600×600 px minimum (the theme crops it square)
- **Format**: JPG or PNG
- **Style**: Keep it consistent across products — same vibe, same background

### 5. Product Details box 📦
Scroll down to the **"Product Details"** meta box. This is where the magic happens:

| Field | What It Does | Example |
|-------|--------------|---------|
| **Price ($)** | The main price. Just numbers, no `$` — the `$` is added for you | `29.00` |
| **Sale Price ($)** | Optional. If it's lower than the price, it shows big with the original struck through | `19.00` |
| **Download URL** | Where buyers go after paying. Blank = button becomes **Add to Cart** | `https://gumroad.com/l/xyz` |
| **File Format** | Shown as a badge on the cover image | `PSD, AI, PDF` |
| **Features** | One per line, hit **Enter** after each. Renders as a "What's Included" checklist ✓ | `20 templates` |

**All of that is optional except the title.** You can publish a product then fill these in later.

### 6. Categories 🗂️
Right sidebar → **Categories** box. These power:

- The **filter buttons** on your shop page
- The **breadcrumb** ("Home → Shop → Templates → Product")
- The **"You May Also Like"** section (random picks from the same category)

Used one, gone wrong? They're in **Products → Categories** to tidy up.

### 7. Publish 🚀

That's the whole flow. But here's what your customers actually see:

- **Archive page** — all products in a grid, filter buttons on top
- **Product page** — cover, format badge, category, title, price (sale price strikes through the original), excerpt, "What's Included" list, then a **Download Now** button
- **No download URL?** The button says **Add to Cart** instead
- **Trust badges** always show: instant download, secure payment, lifetime access
- **No cover image?** A friendly placeholder appears (but really, add a cover)

**Price wisdom:** end in `9` or `5` (`$29`, `$49`). Use sales sparingly — they're special occasion stuff.

---

## Make It Yours 🎛️

**Appearance → Customize** and change things without touching code:

| Where | What You Get |
|-------|--------------|
| **Hero Section** | Headline, subheadline, button text & link |
| **Brand Colors** | Primary, accent, background |
| **Footer** | Copyright text |

Defaults already look great (`#FAF7F0` cream, `#1A1A1A` ink, `#F5DDA4` accent) — but go wild.

---

## Design Vibe 🎭

Hard offset shadows. No blur, pure ink:

```css
box-shadow: 4px 4px 0 0 #1A1A1A;
```

Hover a card → it lifts 2px, shadow grows. Click it → presses back down. Feels like stamping paper. Very satisfying. ✋

---

## Sandbox Widget 🧪

A dev-only widget appears bottom-right when you're running locally. Shows a **DEV badge**, your host, and debug status. It vanishes automatically in production — no config needed.

---

## Support 🆘

Stuck? Try these, in order of fun:

1. **Re-read this readme** — you're here
2. **WordPress Codex** — [developer.wordpress.org](https://developer.wordpress.org)
3. **Fiddle with the customizer** — it's all visual, experiment!

---

## Changelog 📋

**v1.1.0** — Sandbox widget, automatic env detection, DEV badge
**v1.0.0** — Cream Paper design, product system, prices, downloads, category filtering, customizer, the works

---

## License 📜

GPL v2 or later — [gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

---

**Made with ☕ by Blank Page Co**

*Now go sell something cool.*