
<div id="top"></div>

<div align="center">

<img src="https://svg-rewriter.sachinraja.workers.dev/?url=https%3A%2F%2Fcdn.jsdelivr.net%2Fnpm%2F%40mdi%2Fsvg%406.7.96%2Fsvg%2Fyoutube-subscription.svg&fill=%239A3412&width=200px&height=200px" style="width:200px;"/>

<h3 align="center">Page-Builder YT Lite</h3>

<p align="center">
    Adds a YouTube Lite to the Page Builder.
</p>    
</div>

##  1. <a name='TableofContents'></a>Table of Contents


* 1. [Table of Contents](#TableofContents)
* 2. [About The Project](#AboutTheProject)
	* 2.1. [Built With](#BuiltWith)
	* 2.2. [Installation](#Installation)
* 3. [Usage](#Usage)
	* 3.1. [Youtube Lite.](#YoutubeLite.)
	* 3.2. [Source.](#Source.)
	* 3.3. [Cover Image.](#CoverImage.)
	* 3.4. [Overlay.](#Overlay.)
* 4. [Customising](#Customising)
* 5. [Troubleshooting](#Troubleshooting)
* 6. [Contributing](#Contributing)
* 7. [License](#License)
* 8. [Contact](#Contact)
* 9. [Changelog](#Changelog)



##  2. <a name='AboutTheProject'></a>About The Project

Based on [https://github.com/paulirish/lite-youtube-embed](https://github.com/paulirish/lite-youtube-embed), this will add a panel for the Page-Builder to render a youtube video out using the YT-lite code.

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.1. <a name='BuiltWith'></a>Built With

This project was built with the following frameworks, technologies and software.

* [https://github.com/paulirish/lite-youtube-embed](https://github.com/paulirish/lite-youtube-embed)
* [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)
* [Tailwind](https://tailwindcss.com/)
* [ACF](https://advancedcustomfields.com/)
* [PHP](https://php.net/)
* [Wordpress](https://wordpress.org/)

<p align="right">(<a href="#top">back to top</a>)</p>


###  2.2. <a name='Installation'></a>Installation

These are the steps to get up and running with this plugin.

1. Clone the repo into your wordpress plugin folder
    ```bash
    git clone https://github.com/IORoot/wp-plugin__page-builder--yt-lite ./wp-content/plugins/page-builder-yt-lite
    ```
1. Activate the plugin.


> Note: This plugin requires the page-builder plugin to work [https://github.com/IORoot/wp-plugin__page-builder](https://github.com/IORoot/wp-plugin__page-builder)

<p align="right">(<a href="#top">back to top</a>)</p>

##  3. <a name='Usage'></a>Usage

Once you add the "YouTube Lite" organism into your page-builder you'll have access to four tabs:

###  3.1. <a name='YoutubeLite.'></a>Youtube Lite.

- Instance Name. The title of the youtube-lite block. 
- Classes. The class names to give the `<lite-youtube>` component.
- Play Label. Any words to use for the "Play" button label. (optional). Can be blank.
- Params. Any youtube parameters you wish to add. See [https://developers.google.com/youtube/player_parameters#Parameters](https://developers.google.com/youtube/player_parameters#Parameters) for more details.

![youtube-lite](https://github.com/IORoot/wp-plugin__page-builder--yt-lite/blob/master/files/docs/youtube-lite.png?raw=true)

###  3.2. <a name='Source.'></a>Source.

Select what video(s) you wish to display.

- Input Type : Single Video Id.
    - Video ID. The Youtube Video ID. e.g. `ovC21f_Kz4A`

- Input Type : Randomised from List of IDs. (rows - add multiple to randomly select from.)
    - Video ID. The Youtube Video ID. e.g. `ovC21f_Kz4A`

- Input Type : Result from query.
    - First or Random Result. If there are multiple results, choose if you wish to use the first result as a video ID or a randomly selected result.
    - Query. Use a WP_Query array to query the database and retrieve post results from.
    - Video ID Meta field. The meta field in the post which contains the Video ID. (i.e. VideoId). Make sure to use the correct upper/lowercase as field name.

![source](https://github.com/IORoot/wp-plugin__page-builder--yt-lite/blob/master/files/docs/source.png?raw=true)

###  3.3. <a name='CoverImage.'></a>Cover Image.

- Image Type : Media Library
    - Image. Select an image from your media library

- Image Type : URL
    - Custom Image URL. Use a URL as the location of the image. (You could use the youtube raw image)

- Image Type : Query Result Field
    - Not implemented yet.

![cover-image](https://github.com/IORoot/wp-plugin__page-builder--yt-lite/blob/master/files/docs/cover-image.png?raw=true)


###  3.4. <a name='Overlay.'></a>Overlay.

![overlay](https://github.com/IORoot/wp-plugin__page-builder--yt-lite/blob/master/files/docs/overlay.png?raw=true)

- HTML. Any HTML code you wish to place over the top of the video image. Potential for alternative play buttons / descriptions, etc...

Moustaches are available for both post and meta fields. `{{post_title}}` and `{{videoId}}` will work.

A special `{{date:PHP_DATETIME}}` will work too - Where the `PHP_DATETIME` is a correct PHP DateTime format.



##  4. <a name='Customising'></a>Customising

None.

##  5. <a name='Troubleshooting'></a>Troubleshooting

None.

<p align="right">(<a href="#top">back to top</a>)</p>


##  6. <a name='Contributing'></a>Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue.
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#top">back to top</a>)</p>



##  7. <a name='License'></a>License

Distributed under the MIT License.

MIT License

Copyright (c) 2022 Andy Pearson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

<p align="right">(<a href="#top">back to top</a>)</p>



##  8. <a name='Contact'></a>Contact

Author Link: [https://github.com/IORoot](https://github.com/IORoot)

<p align="right">(<a href="#top">back to top</a>)</p>


##  9. <a name='Changelog'></a>Changelog

v1.0.0 - Initial Release
