# Logo Setup Instructions

## Current Setup

The header now displays a logo image. Currently, it's using a placeholder image from Unsplash.

## To Use Your Own Logo

### Option 1: Use a Local Image File

1. Place your logo image in the `frontend/public/` folder
2. Name it `logo.png` (or `logo.jpg`, `logo.svg`)
3. Update the Header component to use the local image:

In `frontend/src/components/Header.js`, change:
```jsx
<img 
  src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=100&h=100&fit=crop&crop=center" 
  alt="Restaurant Logo" 
  className="logo-image"
/>
```

To:
```jsx
<img 
  src="/logo.png" 
  alt="Restaurant Logo" 
  className="logo-image"
/>
```

4. Do the same in `frontend/src/pages/AdminDashboard.js` for the admin header

### Option 2: Use an External URL

Simply replace the image URL in both files with your logo URL.

### Recommended Logo Specifications

- **Size**: 100x100px to 200x200px (square)
- **Format**: PNG (with transparency) or SVG (scalable)
- **Background**: Transparent or matches your theme
- **Style**: Works well with green/brown color scheme

### Current Placeholder

The current placeholder uses a food/restaurant themed image from Unsplash. If you want to keep using it but with a different image, you can find food-related images at:
- Unsplash: https://unsplash.com/s/photos/restaurant-logo
- Or search for "restaurant logo" on Unsplash

The logo will automatically fall back to showing the text "The Yard" if the image fails to load.

