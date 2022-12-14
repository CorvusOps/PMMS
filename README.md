# PMMS
Repository for COMP 20183: Software Engineering 2's Final Requirement: Poverty and Malnutrition Monitoring System of Local City Government

## Usage Instruction
--------------
1. Check [Dependencies](#dependencies) for the required tools needed, install it then set up.
2. Run [Xampp](#xampp) and toggle start on Apache and MySQL Modules. 
3. Enter "localhost/ErovoutikaExamWebsite/" at your browsers URL.

### Dependencies 
1. **[Xampp](#xampp)** <br>
2. **[PHP](#php)** <br>
3. **[Code editors](#codeEditors)** <br>
3.1. **[Visual Code](#visual-code)** <br>
4. **[TailwindCSS](#TailwindCSS)** <br>
5. **[Database](#Database)** <br>
5.1. **[MySQLWorkbench](#MySQLWorkbench)** <br>
5.2. **[PHPMyAdmin](#PHPMyAdmin)** via XAMPP <br>


### Xampp
XAMPP is a free, open source application that allows you to create a local web server on your computer. This is useful for developers who wants to testing their app on local server before deploying them to a live server. Software includes Apache web server, MySQL database, Perl, PHP. It is available for Windows, macOS, Linux. It provides a centralized location for installation, configuration, management of a web server.

#### Procedure in installing
1. In the web browser, visit Apache Friends and download XAMPP installer. 
2. During the installation process, select the required components like MySQL, FileZilla ftp server, PHP, phpMyAdmin or leave the default options and click the Next button. 
3. Choose the root directory path to set up the htdocs folder for our applications. For example ‘C:\xampp’.
4. Click the Allow access button to allow the XAMPP modules from the Windows firewall.
5. After the installation process, click the Finish button of the XAMPP Setup wizard.
6. Now the XAMPP icon is clearly visible on the right side of start menu. Show or Hide can be set by using the control panel by clicking on the icon.
7. To start Apache and MySql, just click on the Start button on the control panel. 

- Making server request: Open your web browser and check whether the XAMPP service has properly installed or not. Type in the URL: http://localhost. If you are able to see the default page for XAMPP, you have successfully installed your XAMPP Server.

- To Check if PHP is Working: All the website related files are organized in a folder called htdocs and then run index.php file by using http://localhost/index.php or http://localhost.

### PHP
PHP is an HTML-embedded scripting language. Much of its syntax is borrowed from C, Java and Perl with a couple of unique PHP-specific features thrown in. The goal of the language is to allow web developers to write dynamically generated pages quickly.

#### Procedure in installing
1. The first thing you have to do is to download the PHP package file of your choice from the official PHP downloads page.
2. You’ll find .zip files available for both x86 and x64 systems, so make sure to download the correct one as per your Windows OS architecture. Also, you’ll have to choose either to download the non-thread-safe or thread-safe version of PHP. If you’re planning to run PHP as an Apache module, the thread-safe version is recommended. However, if you want to run PHP as a CGI module, you can choose either of them!
3. Next, you need to extract the .zip file in the directory where you want to install PHP. A common install location is C:\php. Create the php directory and extract the .zip file contents inside the C:\php directory.
4. The PHP package that you’ve just downloaded already contains two different versions of the configuration file: php.ini-development and php.ini-production. The php.ini-development file is designed and configured for your local development. This has a lot of features enabled which make it easier to test and debug your code, but it makes your software run slower and is not secure for a live site. On the other hand, the php.ini-production file is designed for optimum performance and security. We’re going to use the php.ini-production file.
5. Next, is configure the php.ini configuration file. It’s important to note that we’ve also removed the semicolon in front of the line to make sure it’s not commented. Of course, you need to adjust the above path to match your installation directory. And with that, we’ve finished the php.ini configuration file changes.
6. In the Windows search bar, just type the environment keyword and choose Edit the system environment variables in the search results. Go to the Advanced > Environment Variables section. Edit the PATH environment variable and add ;C:\php to the end. This will make it so you can run PHP just by typing php from the command prompt, no matter what folder you're in.

Finally, reboot the system, and you’re done. You’ve successfully installed PHP in your Windows installation!

### CodeEditors
Code editors or source code editors are software that is designed specifically to help developers with coding. These are text editors with additional functionalities to manage and edit code.

#### Visual Code
Visual Studio Code, also commonly referred to as VS Code, is a source-code editor made by Microsoft with the Electron Framework, for Windows, Linux and macOS. Features include support for debugging, syntax highlighting, intelligent code completion, snippets, code refactoring, and embedded Git. Users can change the theme, keyboard shortcuts, preferences, and install extensions that add additional functionality.

#### Procedure in installing
1.  Visit the official website of the Visual Studio Code using any web browser like Google Chrome, Microsoft Edge, etc.
2. Press the “Download for Windows” button on the website to start the download of the Visual Studio Code Application.
3. When the download finishes, then the Visual Studio Code icon appears in the downloads folder.
4. Click on the installer icon to start the installation process of the Visual Studio Code.
5. After the Installer opens, it will ask you for accepting the terms and conditions of the Visual Studio Code. Click on I accept the agreement and then click the Next button.
6. Choose the location data for running the Visual Studio Code. It will then ask you for browsing the location. Then click on Next button.
7. Then it will ask for beginning the installing setup. Click on the Install button.
8. After clicking on Install, it will take about 1 minute to install the Visual Studio Code on your device.
9. After the Installation setup for Visual Studio Code is finished, it will show a window like this below. Tick the “Launch Visual Studio Code” checkbox and then click Next.
10. After the previous step, the Visual Studio Code window opens successfully. Now you can create a new file in the Visual Studio Code window and choose a language of yours to begin your programming journey!

### TailwindCSS
Tailwind CSS is self-described as a utility first CSS framework. Rather than focusing on the functionality of the item being styled, Tailwind is centered around how it should be displayed. This makes it easier for the developer to test out new styles and change the layout. 

#### Procedure in installing
1. First, install node.js in https://nodejs.org/en/download/ then run 'npm install -g npm'.
1. Visit the official website of the tailwind css using any web browser, then follow their instruction in installation in https://tailwindcss.com/docs/installation.

### Troubleshooting

### Note:
1. Any code editors will do, but please document what you are using.
2. 
