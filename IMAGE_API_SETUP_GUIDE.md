# Image API Configuration Guide - Option C

## Overview

**Option C** implements automated image downloading from free, professional image APIs:
- **Unsplash** - Premium professional photos
- **Pixabay** - Diverse stock images  
- **Pexels** - High-quality free photos

Instead of manual downloading or pre-generated placeholders, this system **automatically fetches real images** from these APIs that perfectly match your platform's needs.

---

## Quick Setup (5 minutes)

### 1. Get Free API Keys (2 min)

**Unsplash:**
- Go to https://unsplash.com/developers
- Click "Create your application"
- Fill in application details
- Copy your **Access Key**

**Pixabay:**
- Go to https://pixabay.com/api/
- Click "Search Images"  
- Copy your **API Key**

**Pexels:**
- Go to https://www.pexels.com/api/
- Click "Create New Key"
- Copy your **API Key**

### 2. Configure Environment Variables (1 min)

Create `.env` file in project root:
```
UNSPLASH_API_KEY=your_unsplash_key
PIXABAY_API_KEY=your_pixabay_key
PEXELS_API_KEY=your_pexels_key
```

### 3. Load Environment Variables (1 min)

Add to `config/app/config.php` at the top:
```php
<?php
// Load environment variables
if (file_exists(__DIR__ . '/../../.env')) {
    $env = parse_ini_file(__DIR__ . '/../../.env');
    foreach ($env as $key => $value) {
        putenv("{$key}={$value}");
    }
}
```

### 4. Download Images (1 min)

**Web Interface:**
- Visit: http://localhost/stitch1/includes/image-download-controller.php
- Click "Fetch from [Service]"
- Images download automatically!

**Command Line:**
```bash
cd c:\xampp\htdocs\stitch1
php includes/image-download-controller.php unsplash
php includes/image-download-controller.php pixabay
php includes/image-download-controller.php pexels
```

---

## Features

### ✅ Automatic Image Selection
Intelligent queries for each image:
- **Heroes:** "Bamenda cityscape", "government building", "community gathering"
- **Services:** Professional images for business, health, education, transport
- **Profiles:** Diverse professional headshots and avatars
- **Emergency:** Ambulance, police, fire, rescue services
- **Testimonials:** Happy customer portraits

### ✅ Smart Organization
Images automatically saved to correct folders:
```
assets/images/
├── heroes/           (6 hero images)
├── services/         (12 service images)
├── profiles/         (6 avatar images)
├── emergency/        (4 emergency images)
└── testimonials/     (3 testimonial images)
```

### ✅ Rate Limiting
Respectful API usage with 1-second delays between requests:
- Unsplash: 50 requests/hour (Free tier)
- Pixabay: 50 requests/hour (Free tier)
- Pexels: 200 requests/hour (Free tier)

### ✅ Progress Logging
Real-time log of downloads:
- Success notifications
- Error handling
- Summary statistics
- Downloadable log file

### ✅ Web Dashboard
Beautiful UI at:
- Admin panel: `/pages/administration/image-manager.php`
- Direct access: `/includes/image-download-controller.php`

Shows:
- API connection status
- Download buttons for each service
- Real-time activity log
- Direct links to get API keys

---

## File Structure

```
core/
├── image-api-manager.php          (API integration class)

includes/
├── image-download-controller.php   (Web UI & CLI handler)

pages/administration/
├── image-manager.php               (Admin dashboard)

.env                                (API keys - don't commit!)
.env.example                        (Template for .env)
```

---

## API Comparison

| Feature | Unsplash | Pixabay | Pexels |
|---------|----------|---------|--------|
| Free Tier | 50/hour | 50/hour | 200/hour |
| Image Quality | ⭐⭐⭐⭐⭐ | ⭐⭐⭐⭐ | ⭐⭐⭐⭐⭐ |
| License | Free | Free | Free |
| Setup | 5 min | 2 min | 3 min |
| Diversity | Excellent | Excellent | Very Good |

**Recommendation:** Start with **Pexels** (200 req/hour) or combine all three!

---

## Usage Examples

### Web Interface
```
1. Open browser to http://localhost/stitch1/includes/image-download-controller.php
2. Click "Fetch from Unsplash"
3. Watch images download in real-time log
4. Check assets/images/ for downloaded files
```

### Command Line (Faster)
```powershell
# Download from Unsplash
php includes/image-download-controller.php unsplash

# Download from Pixabay
php includes/image-download-controller.php pixabay

# Download from Pexels
php includes/image-download-controller.php pexels
```

### Programmatic Usage
```php
<?php
require_once 'core/image-api-manager.php';

$manager = new ImageAPIManager();

// Check API keys
$status = $manager->check_api_keys();
var_dump($status);

// Download from specific API
$results = $manager->fetch_all_images('unsplash');

// Fetch single image
$result = $manager->fetch_from_unsplash('beautiful city landscape', 1);

// Download image to folder
$manager->download_image($image_url, 'heroes', 'my-image');
```

---

## Troubleshooting

### "API key not configured"
- Did you create `.env` file?
- Are API keys correct?
- Restart Apache after creating .env

### "Failed to fetch image"
- Check internet connection
- Verify API key is valid
- Check API rate limits
- Try different API service

### Images not displaying
- Clear browser cache (Ctrl+Shift+Delete)
- Hard refresh (Ctrl+Shift+R)
- Check file permissions on assets/images/
- Run: `chmod -R 755 assets/images/`

### Missing categories
- All 5 categories (heroes, services, profiles, emergency, testimonials) auto-created
- Total: 31 images organized in folders

---

## Rate Limiting & Costs

**ALL SERVICES ARE FREE!**

Free tier limits (no charges):
- **Unsplash:** 50 requests/hour
- **Pixabay:** 50 requests/hour  
- **Pexels:** 200 requests/hour

For your platform (31 images):
- First download: ~1 minute (31 API calls + delays)
- Future downloads: Similar timing
- **Cost:** $0 (forever free tier sufficient)

---

## Security Considerations

### ⚠️ Important
- **Never commit `.env` file to Git**
- Add `.env` to `.gitignore`
- Only admin users can download images
- API keys stored only in environment, not database

### Recommended .gitignore Entry
```
.env
.env.local
.env.*.local
```

### Admin Panel Access
Only `/pages/administration/image-manager.php` requires:
```php
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header('Location: /auth/login.php');
    exit;
}
```

---

## Next Steps

1. ✅ Get API keys (5 min)
2. ✅ Create `.env` file (1 min)
3. ✅ Add .env loader to config (1 min)
4. ✅ Download images via web UI (2 min)
5. ✅ Verify images in assets/images/ (1 min)
6. ✅ Test pages display images correctly (5 min)

**Total time: ~15 minutes for production images!**

---

## Benefits of Option C

| Aspect | Benefit |
|--------|---------|
| **Quality** | Real professional photos vs. placeholders |
| **Relevance** | Intelligent keywords match platform needs |
| **Customization** | Easy to modify search queries |
| **Updates** | Download fresh images anytime |
| **Cost** | Completely free (all services free tier) |
| **Speed** | 31 images in ~1 minute |
| **Automation** | No manual downloading required |
| **Licensing** | All images free for commercial use |

---

## Example Output

```
🚀 Starting image download from unsplash...
============================================================

✓ API Key detected for unsplash
Fetching images...

✓ heroes/bamenda-cityscape
✓ heroes/government-office
✓ heroes/community-gathering
✓ heroes/digital-services
✓ heroes/youth-activities
✓ heroes/emergency-response
✓ services/business-1
✓ services/business-2
...
✓ testimonials/testimonial-3

============================================================
Summary: 31 successful, 0 failed
```

---

## Support

For issues with:
- **Unsplash API:** https://unsplash.com/developers
- **Pixabay API:** https://pixabay.com/api/
- **Pexels API:** https://www.pexels.com/api/

Need help? Check the logs at `/includes/image-download-controller.php`
