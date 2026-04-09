# Image Assets Guide

## Required Image Organization Structure

```
assets/images/
├── heroes/                          # Hero section backgrounds
│   ├── bamenda-cityscape.jpg       # City overview
│   ├── government-office.jpg       # Government building
│   ├── community-gathering.jpg     # Community meeting
│   ├── digital-services.jpg        # Digital theme
│   ├── youth-activities.jpg        # Youth programs
│   └── emergency-response.jpg      # Emergency services
├── services/                        # Service category images
│   ├── business-license.jpg        # Business/commerce
│   ├── property.jpg                # Property/housing
│   ├── health.jpg                  # Healthcare
│   ├── education.jpg               # Education
│   ├── transportation.jpg          # Transport
│   └── utilities.jpg               # Public utilities
├── icons/                          # Service icons
│   ├── payment-icon.png
│   ├── document-icon.png
│   ├── user-icon.png
│   └── ... (more as needed)
├── emergency/                       # Emergency services
│   ├── ambulance.jpg
│   ├── police.jpg
│   ├── fire-rescue.jpg
│   └── disaster-response.jpg
├── profiles/                        # User avatars
│   ├── avatar-male-1.jpg
│   ├── avatar-male-2.jpg
│   ├── avatar-female-1.jpg
│   ├── avatar-female-2.jpg
│   └── avatar-group.jpg
├── backgrounds/                     # Background images
│   ├── pattern-1.jpg
│   ├── pattern-2.jpg
│   └── texture.jpg
└── testimonials/                    # Testimonial avatars
    ├── testimonial-1.jpg
    ├── testimonial-2.jpg
    └── testimonial-3.jpg
```

---

## Download Sources (Free & Licensed)

### 1. **Unsplash** (unsplash.com)
Free, high-resolution photos. No attribution required.

**Recommended searches:**
- "government building" → Heroes
- "city landscape" → Heroes
- "business people" → Services
- "community meeting" → Civic engagement
- "ambulance" → Emergency
- "healthcare" → Services
- "education classroom" → Services
- "youth group" → Services

**Download:** Click image → Download button → Choose resolution

---

### 2. **Pixabay** (pixabay.com)
Free images and vectors. No attribution required.

**Recommended searches:**
- "administration" → Government imagery
- "community" → Civic sections
- "emergency" → Alert/services
- "youth" → Youth programs
- "city council" → Administrative

**Download:** Click image → Download button → Choose size

---

### 3. **Pexels** (pexels.com)
Completely free stock photos.

**Recommended searches:**
- "municipal services"
- "business district"
- "community center"
- "public services"
- "government office"

**Download:** Click image → Download button

---

### 4. **Pixelmob** (pixelmob.com)
For professional illustrations and icons (some free, some paid).

**Good for:** Custom illustrations, modern UI elements

---

## Specific Image Recommendations

### Hero Backgrounds (Download these first)
1. **bamenda-cityscape.jpg** - Search "African city landscape" on Unsplash
2. **government-office.jpg** - Search "government building" on Unsplash
3. **community-gathering.jpg** - Search "community meeting" on Pixabay
4. **digital-services.jpg** - Search "digital technology" on Unsplash
5. **youth-activities.jpg** - Search "youth engagement" on Pexels
6. **emergency-response.jpg** - Search "emergency services" on Pixabay

### Service Images (2-3 per service)
- Business/Commerce: "business meeting", "office space"
- Property/Housing: "houses", "real estate"
- Health: "healthcare", "medical office"
- Education: "classroom", "students"
- Transportation: "roads", "public transport"
- Utilities: "water pipes", "power grid"

### Profile/Avatar Images (Recommended)
- Use service like **UI Faces** (uifaces.com) for realistic avatars
- Or download from Unsplash: search "male portrait", "female portrait"
- Download 4-6 different people for diversity

### Emergency Service Images
- "Ambulance" on Unsplash
- "Police officer" on Pixabay
- "Firefighter" on Pexels
- "Disaster response" on Unsplash

---

## Batch Download Instructions

### Using Firefox
1. Install extension: "DownThemAll"
2. Go to image search results
3. Right-click → DownThemAll
4. Select images → Download all at once

### Using Browser Extensions
- **Bulk Image Downloader** (Chrome)
- **Image Downloader** (Chrome)
- **Fatkun Batch Download Image** (Chrome/Firefox)

### Manual Workflow
1. Search on Unsplash/Pixabay
2. Click image
3. Download full resolution
4. Rename according to category
5. Save to appropriate folder

---

## Image Naming Convention

```
[category]-[purpose]-[number].jpg

Examples:
- hero-cityscape-1.jpg
- service-business-license-1.jpg
- profile-avatar-male-1.jpg
- emergency-ambulance-1.jpg
- background-pattern-1.jpg
```

---

## Download & Organize Script (PowerShell)

```powershell
# Create folder structure
$folders = @(
    'assets/images/heroes',
    'assets/images/services',
    'assets/images/emergency',
    'assets/images/profiles',
    'assets/images/backgrounds',
    'assets/images/testimonials'
)

foreach ($folder in $folders) {
    New-Item -ItemType Directory -Force -Path $folder
}

Write-Host "Folder structure created!"
```

---

## Image Optimization Tips

**Before uploading:**
1. **Size:** Max width 1920px for web
2. **Format:** JPG for photos, PNG for graphics
3. **Quality:** 85% quality is usually enough
4. **File Size:** Aim for 200-500KB per image

**Optimization Tools:**
- **TinyPNG** (tinypng.com) - Compress images online
- **ImageMagick** - Batch processing
- **Online-Convert** - Format conversion

**PowerShell optimization example:**
```powershell
# Using Get-ChildItem to rename files
Get-ChildItem "C:\xampp\htdocs\stitch1\assets\images\*.jpg" | 
    Rename-Item -NewName {$_.BaseName.ToLower() + $_.Extension}
```

---

## Quick Start (Next 15 minutes)

1. **Visit Unsplash.com**
   - Search: "government building"
   - Download 3 high-resolution images
   - Save to: `assets/images/heroes/`

2. **Visit Pixabay.com**
   - Search: "emergency services"
   - Download 2 images
   - Save to: `assets/images/emergency/`

3. **Visit Pexels.com**
   - Search: "business office"
   - Download 2 images
   - Save to: `assets/images/services/`

4. **Create avatar images**
   - Visit UI Faces (uifaces.com)
   - Download 6 different avatars
   - Save to: `assets/images/profiles/`

5. **Organize & optimize**
   - Use TinyPNG to compress
   - Rename files consistently
   - Verify all images load properly

---

## Alternative: Using License-Free Image APIs

### Unsplash API
```php
<?php
// Random image from Unsplash
$image_url = "https://source.unsplash.com/random/1920x1080?government";
echo '<img src="' . $image_url . '" alt="Random government image">';
?>
```

### Pexels API
```php
<?php
$api_key = "YOUR_PEXELS_API_KEY";
$search = "city";
$url = "https://api.pexels.com/v1/search?query=$search&per_page=1";

$response = file_get_contents($url, false, stream_context_create([
    'http' => ['header' => "Authorization: $api_key\r\n"]
]));

$data = json_decode($response, true);
$image_url = $data['photos'][0]['src']['large'];
?>
```

---

## File Size Reference

| Image Type | Recommended Size | File Size |
|------------|------------------|-----------|
| Hero Background | 1920x1080 | 300-500KB |
| Service Card | 640x480 | 100-200KB |
| Profile Avatar | 200x200 | 50-100KB |
| Icon | 128x128 | 20-50KB |
| Thumbnail | 300x300 | 80-150KB |

---

## Troubleshooting

**Images not loading?**
- Check file path is correct
- Verify file exists in folder
- Check file permissions (755+)
- Verify image URL encoding

**Images look blurry?**
- Re-download at higher resolution
- Check image compression settings
- Use @2x for retina displays

**Slow page load?**
- Compress images using TinyPNG
- Use WebP format (if supported)
- Implement lazy loading
- Use CDN for image delivery

---

## Summary

- **Quick Start:** Download 15-20 images from Unsplash/Pixabay (30 min)
- **Organize:** Create folder structure as shown above
- **Optimize:** Compress with TinyPNG
- **Integrate:** Update image paths in your PHP/HTML
- **Test:** Verify all images display correctly

**Total time:** ~1-2 hours for complete image set
