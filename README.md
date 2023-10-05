# 🤖 **CloakingGPT**

🇬🇧 `CloakingGPT` is a tool crafted to distinctly showcase content to the end-users and ChatGPT, particularly when leveraging the "Browse with Bing" feature. Display user-centric content by leveraging user-agent and IP-based cloaking, and even sneak in hidden instructions exclusive for ChatGPT! 🛡️🤫

🇫🇷 `CloakingGPT` est un outil conçu pour afficher du contenu spécifique aux utilisateurs finaux et à ChatGPT, en particulier lorsqu'il utilise la fonction "Browse with Bing". Affichez du contenu spécifique à l'utilisateur en exploitant le cloaking basé sur l'agent utilisateur et l'IP, et glissez même des instructions cachées exclusives pour ChatGPT!

---

## 📦 Installation:

1. 🧰 Make sure you have `composer` installed. If it's not in your toolbox yet, grab it [here](https://getcomposer.org/).
2. 📂 Proceed to your project directory.
3. 🚀 Run the command `composer require rojek-seo/cloaking-gpt`.

## 🚀 Usage:

🔗 Start by linking the Composer autoload:

```php
require 'vendor/autoload.php';
```

🛠️ Next up, instantiate CloakingGPT and determine access:

```php
$cloaking = new \RojekSeo\CloakingGPT();

if (!$cloaking->hasAccess()) {
echo "👥 General user content";
} else {
echo "🤖 Content for ChatGPT's 'Browse with Bing'. You can also insert hidden instructions for ChatGPT here.";
}
```

## 🌐 Demonstration 

Go to ChatGPT and activate "Browse with Bing".

Then ask ChatGPT to visit page https://www.rojek.fr/cloaking-gpt/ and make a summary.

## 🌟 Support Us!
If you find this project useful, please consider giving it a star ⭐ on GitHub. This will help more people discover and benefit from it. Your support is appreciated!

## Contribution

Feel free to fork this project and improve it. Any contributions are appreciated.
N'hésitez pas à forker ce projet et à l'améliorer. Toute contribution est appréciée.