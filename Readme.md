# Intelligent Form Reader App Project Deep Blue

Most of the NGO’s run programs where the counsellor / filed workers have to visit remote rural areas or urban slum areas having very poor infrastructure and collect the required data based on their observation. They usually fill standard <strong>paper</strong> Later they manually enter data into the system. It’s a cumbersome process, especially if that data entered is handwritten by some other person.

The NGOs need a solution which would help take <strong>scanned images</strong> of the forms as <strong>input</strong> and capture the associated fields which are entered as handwritten (English block capital) text and numbers into <strong>electronic form</strong> to store the same.

The solution should be flexible to work for different kinds of forms even if the block capital letters and numbers are appearing at different positions for different forms.

## Problem Statement

The problem is to be able to build a software which will <strong>allow to set up of different types of forms</strong> in the system.

Based on the form which is set up, the solution needs to be able to recognise English Handwritten alphabets and numbers (block capitals) and store them as information.

There are a wide variety of OCR softwares in the market which allow to convert scanned images of documents into searchable text. These work well when the content in the image is in printed form. However this challenge looks at the <strong>ability to convert English handwritten (block capitals) alphabets and number</strong> from different kinds of forms and store them.

## Getting Started

* Once the project is cloned you need to import the Database from the DB folder in PHPmyadmin.
* Place the Server Connections and APIs & OCR Web in the htdocs folder of your PHP localhost.
* Run the OCR Android Folder in Android Studio 2.0 or greater.
* Open the string.xml file of value folder in Android Studio and change the IP Address String to the IP Address of your Local Machine.
#### Note: 
Make sure your Android Phone and Local Machine are connected on same N/W.


### Prerequisites

* [Android Studio 2.0 or above](https://developer.android.com/studio/index.html)
* [XAMPP PHP 5.6 or above](https://www.apachefriends.org/download.html)
* Android Phone | Req : Lolipop 5.0 or above, Camera.


## Demo

![Alt text](SS/main.png?raw=true "Template Activity")

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone who's code was used
* Inspiration
* etc
