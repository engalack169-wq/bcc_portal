<?php
/**
 * Image API Manager
 * Automated image fetching from Unsplash, Pixabay, and Pexels
 */

class ImageAPIManager {
    
    // API Configuration
    private const APIS = [
        'unsplash' => [
            'base_url' => 'https://api.unsplash.com',
            'key_env' => 'UNSPLASH_API_KEY',
            'per_page' => 30,
        ],
        'pixabay' => [
            'base_url' => 'https://pixabay.com/api/',
            'key_env' => 'PIXABAY_API_KEY',
            'per_page' => 20,
        ],
        'pexels' => [
            'base_url' => 'https://api.pexels.com/v1',
            'key_env' => 'PEXELS_API_KEY',
            'per_page' => 30,
        ],
    ];
    
    private $image_queries = [
        'heroes' => [
            'bamenda-cityscape' => 'African city landscape urban sunset',
            'government-office' => 'government building city hall modern',
            'community-gathering' => 'community meeting diverse people discussion',
            'digital-services' => 'digital technology modern interface computer',
            'youth-activities' => 'young people youth group engagement activity',
            'emergency-response' => 'emergency services ambulance medical response',
        ],
        'services' => [
            'business-1' => 'business meeting professional office',
            'business-2' => 'office workspace modern corporate',
            'property-1' => 'house residential building real estate',
            'property-2' => 'housing residential property architecture',
            'health-1' => 'healthcare medical doctor office hospital',
            'health-2' => 'medical clinic hospital healthcare facility',
            'education-1' => 'classroom school students learning education',
            'education-2' => 'student studying academic education training',
            'transport-1' => 'public transport bus train transit',
            'transport-2' => 'roads city streets transportation infrastructure',
            'utilities-1' => 'water infrastructure pipes water system',
            'utilities-2' => 'electricity power grid utility infrastructure',
        ],
        'profiles' => [
            'avatar-male-1' => 'professional male portrait headshot',
            'avatar-male-2' => 'friendly man portrait face professional',
            'avatar-female-1' => 'professional woman portrait headshot',
            'avatar-female-2' => 'friendly woman portrait face professional',
            'avatar-group' => 'diverse group of people team photo',
            'avatar-profile' => 'professional profile photo business portrait',
        ],
        'emergency' => [
            'ambulance' => 'ambulance emergency medical vehicle',
            'police' => 'police officer law enforcement badge',
            'fire-rescue' => 'firefighter fire rescue emergency service',
            'disaster-response' => 'disaster emergency response rescue team',
        ],
        'testimonials' => [
            'testimonial-1' => 'happy satisfied customer professional portrait',
            'testimonial-2' => 'smiling professional portrait headshot',
            'testimonial-3' => 'positive professional portrait smile',
        ],
    ];
    
    private $base_path;
    private $log_file;
    
    public function __construct() {
        $this->base_path = __DIR__ . '/../../../assets/images';
        $this->log_file = __DIR__ . '/image_download.log';
    }
    
    /**
     * Fetch image from Unsplash API
     */
    public function fetch_from_unsplash($query, $count = 1) {
        $api_key = getenv('UNSPLASH_API_KEY');
        if (!$api_key) {
            return $this->error("Unsplash API key not configured");
        }
        
        $url = sprintf(
            '%s/search/photos?query=%s&per_page=%d&client_id=%s',
            self::APIS['unsplash']['base_url'],
            urlencode($query),
            $count,
            $api_key
        );
        
        return $this->fetch_url($url, 'unsplash');
    }
    
    /**
     * Fetch image from Pixabay API
     */
    public function fetch_from_pixabay($query, $count = 1) {
        $api_key = getenv('PIXABAY_API_KEY');
        if (!$api_key) {
            return $this->error("Pixabay API key not configured");
        }
        
        $url = sprintf(
            '%s?key=%s&q=%s&per_page=%d&editors_choice=true&safesearch=true',
            self::APIS['pixabay']['base_url'],
            $api_key,
            urlencode($query),
            $count
        );
        
        return $this->fetch_url($url, 'pixabay');
    }
    
    /**
     * Fetch image from Pexels API
     */
    public function fetch_from_pexels($query, $count = 1) {
        $api_key = getenv('PEXELS_API_KEY');
        if (!$api_key) {
            return $this->error("Pexels API key not configured");
        }
        
        $url = sprintf(
            '%s/search?query=%s&per_page=%d',
            self::APIS['pexels']['base_url'],
            urlencode($query),
            $count
        );
        
        $context = stream_context_create([
            'http' => [
                'header' => "Authorization: {$api_key}\r\n",
            ]
        ]);
        
        return $this->fetch_url($url, 'pexels', $context);
    }
    
    /**
     * Download image from URL and save to folder
     */
    public function download_image($image_url, $folder, $filename) {
        $folder_path = $this->base_path . '/' . $folder;
        
        if (!is_dir($folder_path)) {
            mkdir($folder_path, 0755, true);
        }
        
        $file_path = $folder_path . '/' . $filename . '.jpg';
        
        try {
            $image_data = file_get_contents($image_url);
            if ($image_data === false) {
                throw new Exception("Failed to fetch image from URL");
            }
            
            if (file_put_contents($file_path, $image_data) === false) {
                throw new Exception("Failed to save image file");
            }
            
            $this->log("Downloaded: {$filename} → {$file_path}");
            return [
                'success' => true,
                'file' => $file_path,
                'url' => $image_url,
            ];
        } catch (Exception $e) {
            $this->log("ERROR: {$e->getMessage()}", 'error');
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    
    /**
     * Fetch images for all categories
     */
    public function fetch_all_images($api_source = 'unsplash') {
        $results = [];
        
        foreach ($this->image_queries as $folder => $queries) {
            $results[$folder] = [];
            
            foreach ($queries as $filename => $query) {
                $this->log("Fetching: {$folder}/{$filename} from {$api_source}...");
                
                if ($api_source === 'unsplash') {
                    $response = $this->fetch_from_unsplash($query, 1);
                } elseif ($api_source === 'pixabay') {
                    $response = $this->fetch_from_pixabay($query, 1);
                } elseif ($api_source === 'pexels') {
                    $response = $this->fetch_from_pexels($query, 1);
                } else {
                    $response = $this->error("Unknown API source: {$api_source}");
                }
                
                if ($response['success']) {
                    $image_url = $this->extract_image_url($response, $api_source);
                    if ($image_url) {
                        $download = $this->download_image($image_url, $folder, $filename);
                        $results[$folder][$filename] = $download;
                    }
                } else {
                    $results[$folder][$filename] = ['success' => false, 'error' => $response['error']];
                }
                
                // Rate limiting - be respectful to API
                sleep(1);
            }
        }
        
        return $results;
    }
    
    /**
     * Extract image URL from API response
     */
    private function extract_image_url($response, $api_source) {
        if ($api_source === 'unsplash' && isset($response['data']['results'][0]['urls']['regular'])) {
            return $response['data']['results'][0]['urls']['regular'];
        } elseif ($api_source === 'pixabay' && isset($response['data']['hits'][0]['largeImageURL'])) {
            return $response['data']['hits'][0]['largeImageURL'];
        } elseif ($api_source === 'pexels' && isset($response['data']['photos'][0]['src']['large'])) {
            return $response['data']['photos'][0]['src']['large'];
        }
        
        return null;
    }
    
    /**
     * Fetch URL with cURL
     */
    private function fetch_url($url, $source, $context = null) {
        try {
            if ($context) {
                $response = file_get_contents($url, false, $context);
            } else {
                $response = file_get_contents($url);
            }
            
            if ($response === false) {
                throw new Exception("Failed to fetch from {$source}");
            }
            
            $data = json_decode($response, true);
            if ($data === null) {
                throw new Exception("Invalid JSON response from {$source}");
            }
            
            return ['success' => true, 'data' => $data];
        } catch (Exception $e) {
            return ['success' => false, 'error' => $e->getMessage()];
        }
    }
    
    /**
     * Logging utility
     */
    private function log($message, $level = 'info') {
        $timestamp = date('Y-m-d H:i:s');
        $log_message = "[{$timestamp}] [{$level}] {$message}\n";
        file_put_contents($this->log_file, $log_message, FILE_APPEND);
        echo $log_message;
    }
    
    /**
     * Return error array
     */
    private function error($message) {
        $this->log("ERROR: {$message}", 'error');
        return ['success' => false, 'error' => $message];
    }
    
    /**
     * Get API keys status
     */
    public function check_api_keys() {
        $status = [
            'unsplash' => !empty(getenv('UNSPLASH_API_KEY')),
            'pixabay' => !empty(getenv('PIXABAY_API_KEY')),
            'pexels' => !empty(getenv('PEXELS_API_KEY')),
        ];
        
        return $status;
    }
    
    /**
     * Get log contents
     */
    public function get_log() {
        if (file_exists($this->log_file)) {
            return file_get_contents($this->log_file);
        }
        return "No log file yet.";
    }
    
    /**
     * Clear log
     */
    public function clear_log() {
        if (file_exists($this->log_file)) {
            unlink($this->log_file);
            return true;
        }
        return false;
    }
}

// Usage example:
// $manager = new ImageAPIManager();
// $results = $manager->fetch_all_images('unsplash');
// var_dump($results);
?>
