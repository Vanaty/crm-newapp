// Intercept all fetch requests to add the Authorization header
const originalFetch = window.fetch;
window.fetch = function() {
    let [resource, config] = arguments;
    
    // Only add token for API requests to our domain
    if (resource.startsWith('/')) {
        // Get token from localStorage
        const token = localStorage.getItem('api_token');
        
        if (token) {
            // If config is not provided, create it
            if (!config) {
                config = {};
            }
            
            // If headers are not provided, create them
            if (!config.headers) {
                config.headers = {};
            }
            
            // Add Authorization header
            config.headers['Authorization'] = `Bearer ${token}`;
        }
    }
    
    return originalFetch(resource, config);
};
