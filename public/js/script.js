   //api tradução, usando cookies
    // Função para configurar o Google Translate e garantir que o idioma seja salvo
    function setupGoogleTranslate() {
        // Recupera o idioma salvo no cookie ou define 'pt' como padrão
        const savedLanguage = getCookie('language') || 'pt';
      
        function initializeGTranslate(language) {
          window.gtranslateSettings = {
            "default_language": language, // Define o idioma salvo ou o padrão
            "async_load": true,
            "show_language_name": true,
            "native_language_names": true,
            "detect_browser_language": true,
            "auto_redirect": true,
            "languages": ["pt", "es", "en"],
            "globe_color": "red",
            "wrapper_selector": ".gtranslate_wrapper",
            "horizontal_position": "left",
            "vertical_position": "bottom",
            "alt_flags": { "en": "usa", "pt": "brazil" },
            "onLanguageChanged": function(language) {
              setCookie('language', language, 365); // Salva o idioma no cookie por 365 dias
            }
          };
        }
      
        // Função para obter o valor de um cookie
        function getCookie(name) {
          const value = `; ${document.cookie}`;
          const parts = value.split(`; ${name}=`);
          if (parts.length === 2) return parts.pop().split(';').shift();
        }
      
        // Função para definir um cookie
        function setCookie(name, value, days) {
          const d = new Date();
          d.setTime(d.getTime() + (days * 24 * 60 * 60 * 1000)); // Validade do cookie em dias
          const expires = `expires=${d.toUTCString()}`;
          document.cookie = `${name}=${value}; ${expires}; path=/`;
        }
      
        // Inicializa o widget com o idioma correto
        initializeGTranslate(savedLanguage);
      }
      
      // Chama a função de configuração
      setupGoogleTranslate();
      
        // Função para alternar o modo escuro
        function toggleDarkMode() {
          document.body.classList.toggle('dark-mode');
      }      