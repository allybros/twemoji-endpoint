# Twemoji Endpoint
An endpoint service for twemoji. Makes possible to get svg file with name. Uses GET method.


### 🌟 Features
* Lightweight implementation
* Simple to use
* Open source emojis


### 📀 Installation
It is very easy to install twemoji endpoint into a server. 
You can also try our demo endpoint: https://api.allybros.com/twemoji/
However, there is no guarantee that this endpoint will be maintained. 
If you want to use this kind of solution, please use the source code and host the endpoint on your own server.

For hosting twemoji endpoint on your own server, it is enough to place resources directory and index.php file into 
a public accessible directory of an php web server.

### 🕹 Usage
Calling twemoji endpoint is very simple. You only call the endpoint with one query parameter.

#### Requests:
You need to set a name parameter in order to retrieve SVG emoji. It is very simple.
Emoji names can be found here: https://unicode.org/emoji/charts/full-emoji-list.html
Use CLDR Short names. For space character, use '-'.

GET `https://api.allybros.com/twemoji?name=grinning-face`

#### Responses:
Twemoji endpoint returns the svg content as response. This allows you to use twemoji endpoint as a dynamic asset url.

EndPoint returns a json when an error is occurred. Youy- can see an example below:

**For Invalid Name:**
 ```` [javascript]
 {"status":40, "message":"Invalid name."}
 ````

### 👾 Tech Stack
* Php
* Curl


