# twemojiEndPoint
An endpoint service for twemoji. Makes possible to get svg file with name. Uses GET method.

## Usage
EmojiEndPoint demo avaible on: api.allybros.com/twemoji/
However, there is no guarantee that this endpoint will be maintained. If you want to use this kind of solution, use the source code and host on your own server.

You need to set a name parameter in order to retrieve SVG emoji. It is very simple.
Emoji names can be found here: https://unicode.org/emoji/charts/full-emoji-list.html
Use CLDR Short names. For space character, use '-'.

Example: https://api.allybros.com/twemoji?name=grinning-face
