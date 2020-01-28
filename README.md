# FiveTool2020

<h2>FiveTool WordPress Theme for 2020</h2>

To get started:

1. Clone theme into a new theme folder in Wordpress.
2. Activate theme
3. Install ACF Pro
4. Sync field groups already created in ACF-JSON folder
   - This will create a modular drag and drop interface when you select the 'Page Modular' template.

<h3>Theme Features:</h3>

<strong>Webpack for processing SASS and JS files</strong>

<p>Source JS and SASS files are stored under the /src directory.</p>
<p>Webpack is using babel for ES6 transpiling and postCSS for adding vendor prefixes to CSS files.</p>

TODO: Detail src structure

To get started: (In terminal)

1. run 'npm i' in the theme directory to install dependencies.
2. run 'npm run dev' to use webpack to compile JS and SASS files. This will also run a watch task so whenever you change any files under /src it will recompile.
3. run 'npm run build' to create production ready files under dist/

(Currently dev and build create the same files, dev just also runs a watch task)

<strong>ACF for block building</strong>

<p>This theme is based on using ACF for creating "blocks" of content that can be utilized within a flexible content drag and drop interface.</p>
<p>A hero block example has been created under /template-parts/blocks/ft-hero.php. ft-hero matches the name of the field group within the ACF flexible content group. page-modular.php loops through the flexible content field and based on the block it encouters will load the same name template file.</p>
