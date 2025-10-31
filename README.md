# AY'SMART Investment Ltd - Professional Real Estate & Automotive Website

A modern, professional website for AY'SMART Investment Ltd, specializing in real estate management and automotive sales in Nigeria.

## 🌟 Features

- **Professional Design**: Modern, clean design with gold accents on dark navy background
- **Responsive Layout**: Fully responsive design that works on all devices (mobile, tablet, desktop)
- **Multiple Pages**:
  - Home/Index page with hero carousel
  - Services overview
  - Real Estate listings
  - Automotive listings
  - About Us with mission, vision, and testimonials
  - Contact form with company information
  - Registration page
- **Interactive Elements**: Smooth animations, hover effects, and transitions
- **Professional Typography**: Using Inter and Playfair Display fonts
- **SEO Ready**: Proper HTML5 semantic structure

## 📁 Project Structure

```
aysmartinvestmentLtd/
├── assets/
│   ├── css/
│   │   └── styles.css          # Main stylesheet with professional styling
│   ├── js/
│   │   └── main.js             # JavaScript for interactions
│   └── img/                    # Image directory (see below for requirements)
│       ├── README.md           # Image requirements guide
│       └── .gitkeep
├── index.html                  # Landing page with carousel
├── home.html                   # Alternative home page
├── about.html                  # About us page
├── services.html               # Services overview
├── realestate.html            # Real estate listings
├── automotive.html            # Automotive listings
├── contact.html               # Contact form
├── register.html              # Registration page
├── details_realestate.html    # Property details page
├── details_auto.html          # Vehicle details page
└── form_handler.php           # PHP form handler

```

## 🎨 Design Features

### Color Scheme
- **Primary Dark**: #0F172A (Navy Blue)
- **Secondary Dark**: #1E293B (Slate)
- **Primary Gold**: #D4AF37 (Professional Gold)
- **Accent Gold**: #F4C430 (Bright Gold)
- **Text Light**: #F8FAFC (Off-white)

### Typography
- **Headings**: Playfair Display (Serif)
- **Body**: Inter (Sans-serif)

### Key Styling Elements
- Gradient backgrounds
- Glass morphism effects (backdrop blur)
- Smooth transitions and animations
- Professional hover effects
- Custom scrollbar styling
- Responsive navigation with mobile menu

## 📸 Image Requirements

The website requires the following images to be placed in the `assets/img/` directory. See `assets/img/README.md` for detailed specifications.

### Required Images:
- **logo.png** - Company logo (300x300px recommended, transparent background)
- **Real Estate Images**: realestate1-6.jpg, estate2.jpg, land1.jpg
- **Automotive Images**: car1-8.jpg
- **CAC Certificate**: cac_sample.jpg

**Note**: Currently, the site uses placeholder references. Upload your actual images with the exact filenames listed in `assets/img/README.md`.

## 🚀 Getting Started

### Local Development

1. Clone the repository:
```bash
git clone https://github.com/jareschoice/aysmartinvestmentLtd.git
cd aysmartinvestmentLtd
```

2. Add your images to the `assets/img/` directory (see `assets/img/README.md` for requirements)

3. Open `index.html` in a web browser or use a local server:
```bash
python3 -m http.server 8000
# Then visit http://localhost:8000
```

### Deployment

The website is static HTML/CSS/JS and can be deployed to:
- GitHub Pages
- Netlify
- Vercel
- Any static hosting service

## 🔧 Customization

### Updating Colors
Edit the CSS variables in `assets/css/styles.css`:
```css
:root {
  --primary-gold: #D4AF37;
  --primary-dark: #0F172A;
  /* ... other variables ... */
}
```

### Adding Content
- Edit the HTML files to update text content
- Images should be placed in `assets/img/`
- Forms can be configured to work with `form_handler.php` or your preferred backend

## 📱 Responsive Breakpoints

- **Desktop**: > 992px
- **Tablet**: 768px - 992px
- **Mobile**: < 768px

## 🌐 Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## 📝 License

Copyright © 2025 AY'SMART Investment Ltd. All Rights Reserved.

## 📞 Contact

**AY'SMART Investment Ltd**
- **Address**: No. 20 Olusosun Street, Adeta, Ilorin, Kwara State, Nigeria
- **Email**: info@aysmartinvestment.com
- **Phone**: +234 901 234 5678
- **Business Number**: BN:355566

---

**Built with ❤️ for professional real estate and automotive investment solutions in Africa**
