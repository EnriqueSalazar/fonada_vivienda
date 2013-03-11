  


<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# githubog: http://ogp.me/ns/fb/githubog#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>yii/framework/zii/widgets/jui/CJuiDatePicker.php at 1.1.13 · yiisoft/yii · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144.png" />
    <link rel="logo" type="image/svg" href="http://github-media-downloads.s3.amazonaws.com/github-logo.svg" />
    <meta name="msapplication-TileImage" content="/windows-tile.png">
    <meta name="msapplication-TileColor" content="#ffffff">

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="wbAxItfs2E82MCutDZJ6GhJ1tR/r8aL3uuA2dLBH+fM=" name="csrf-token" />

    <link href="https://a248.e.akamai.net/assets.github.com/assets/github-8fb72f84c7cd9a17d980130174b338507eb03924.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="https://a248.e.akamai.net/assets.github.com/assets/github2-9d67d355fef80aa4aa95e9a29207dfcb3f237cb9.css" media="screen" rel="stylesheet" type="text/css" />
    


      <script src="https://a248.e.akamai.net/assets.github.com/assets/frameworks-cc4895cbb610429d2ce48e7c2392822c33db2dfe.js" type="text/javascript"></script>
      <script src="https://a248.e.akamai.net/assets.github.com/assets/github-25250eebf4383186fbf0739210d6b5cef03891c9.js" type="text/javascript"></script>
      

        <link rel='permalink' href='/yiisoft/yii/blob/e9e4a0d5be901d8bd48e516a2d9afe33d6fd05a6/framework/zii/widgets/jui/CJuiDatePicker.php'>
    <meta property="og:title" content="yii"/>
    <meta property="og:type" content="githubog:gitrepository"/>
    <meta property="og:url" content="https://github.com/yiisoft/yii"/>
    <meta property="og:image" content="https://secure.gravatar.com/avatar/45ab5f787f17e41c1c2ed66163b18bb1?s=420&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png"/>
    <meta property="og:site_name" content="GitHub"/>
    <meta property="og:description" content="Yii PHP Framework. Contribute to yii development by creating an account on GitHub."/>
    <meta property="twitter:card" content="summary"/>
    <meta property="twitter:site" content="@GitHub">
    <meta property="twitter:title" content="yiisoft/yii"/>

    <meta name="description" content="Yii PHP Framework. Contribute to yii development by creating an account on GitHub." />

  <link href="https://github.com/yiisoft/yii/commits/1.1.13.atom" rel="alternate" title="Recent Commits to yii:1.1.13" type="application/atom+xml" />

  </head>


  <body class="logged_out page-blob windows vis-public env-production ">
    <div id="wrapper">

      

      

      


        <div class="header header-logged-out">
          <div class="container clearfix">

            <a class="header-logo-wordmark" href="https://github.com/">
              <img alt="GitHub" class="github-logo-4x" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x.png?1337118066" />
              <img alt="GitHub" class="github-logo-4x-hover" height="30" src="https://a248.e.akamai.net/assets.github.com/images/modules/header/logov7@4x-hover.png?1337118066" />
            </a>

              
<ul class="top-nav">
    <li class="explore"><a href="https://github.com/explore">Explore GitHub</a></li>
  <li class="search"><a href="https://github.com/search">Search</a></li>
  <li class="features"><a href="https://github.com/features">Features</a></li>
    <li class="blog"><a href="https://github.com/blog">Blog</a></li>
</ul>


            <div class="header-actions">
                <a class="button primary" href="https://github.com/signup">Sign up for free</a>
              <a class="button" href="https://github.com/login?return_to=%2Fyiisoft%2Fyii%2Fblob%2F1.1.13%2Fframework%2Fzii%2Fwidgets%2Fjui%2FCJuiDatePicker.php">Sign in</a>
            </div>

          </div>
        </div>


      

      


            <div class="site hfeed" itemscope itemtype="http://schema.org/WebPage">
      <div class="hentry">
        
        <div class="pagehead repohead instapaper_ignore readability-menu">
          <div class="container">
            <div class="title-actions-bar">
              


                  <ul class="pagehead-actions">


          <li>
            <span class="star-button"><a href="/login?return_to=%2Fyiisoft%2Fyii" class="minibutton js-toggler-target entice tooltipped leftwards" title="You must be signed in to use this feature" rel="nofollow"><span class="mini-icon mini-icon-star"></span>Star</a><a class="social-count js-social-count" href="/yiisoft/yii/stargazers">2,325</a></span>
          </li>
          <li>
            <a href="/login?return_to=%2Fyiisoft%2Fyii" class="minibutton js-toggler-target fork-button entice tooltipped leftwards"  title="You must be signed in to fork a repository" rel="nofollow"><span class="mini-icon mini-icon-fork"></span>Fork</a><a href="/yiisoft/yii/network" class="social-count">803</a>
          </li>
    </ul>

              <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
                <span class="repo-label"><span>public</span></span>
                <span class="mega-icon mega-icon-public-repo"></span>
                <span class="author vcard">
                  <a href="/yiisoft" class="url fn" itemprop="url" rel="author">
                  <span itemprop="title">yiisoft</span>
                  </a></span> /
                <strong><a href="/yiisoft/yii" class="js-current-repository">yii</a></strong>
              </h1>
            </div>

            

  <ul class="tabs">
    <li><a href="/yiisoft/yii/tree/1.1.13" class="selected" highlight="repo_sourcerepo_downloadsrepo_commitsrepo_tagsrepo_branches">Code</a></li>
    <li><a href="/yiisoft/yii/network" highlight="repo_network">Network</a></li>
    <li><a href="/yiisoft/yii/pulls" highlight="repo_pulls">Pull Requests <span class='counter'>61</span></a></li>

      <li><a href="/yiisoft/yii/issues" highlight="repo_issues">Issues <span class='counter'>449</span></a></li>

      <li><a href="/yiisoft/yii/wiki" highlight="repo_wiki">Wiki</a></li>


    <li><a href="/yiisoft/yii/graphs" highlight="repo_graphsrepo_contributors">Graphs</a></li>


  </ul>
  
<div class="tabnav">

  <span class="tabnav-right">
    <ul class="tabnav-tabs">
          <li><a href="/yiisoft/yii/tags" class="tabnav-tab" highlight="repo_tags">Tags <span class="counter ">34</span></a></li>
    </ul>
    
  </span>

  <div class="tabnav-widget scope">


    <div class="select-menu js-menu-container js-select-menu js-branch-menu">
      <a class="minibutton select-menu-button js-menu-target" data-hotkey="w" data-ref="1.1.13">
        <span class="mini-icon mini-icon-tag"></span>
        <i>tag:</i>
        <span class="js-select-button">1.1.13</span>
      </a>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container js-select-menu-pane">

        <div class="select-menu-modal js-select-menu-pane">
          <div class="select-menu-header">
            <span class="select-menu-title">Switch branches/tags</span>
            <span class="mini-icon mini-icon-remove-close js-menu-close"></span>
          </div> <!-- /.select-menu-header -->

          <div class="select-menu-filters">
            <div class="select-menu-text-filter">
              <input type="text" id="commitish-filter-field" class="js-select-menu-text-filter js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
            </div> <!-- /.select-menu-text-filter -->
            <div class="select-menu-tabs">
              <ul>
                <li class="select-menu-tab">
                  <a href="#" data-filter="branches" class="js-select-menu-tab selected">Branches</a>
                </li>
                <li class="select-menu-tab">
                  <a href="#" data-filter="tags" class="js-select-menu-tab">Tags</a>
                </li>
              </ul>
            </div><!-- /.select-menu-tabs -->
          </div><!-- /.select-menu-filters -->

          <div class="select-menu-list js-filter-tab js-filter-branches" data-filterable-for="commitish-filter-field" data-filterable-type="substring">



              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>

                    <a href="/yiisoft/yii/blob/master/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="master" rel="nofollow">master</a>

              </div> <!-- /.select-menu-item -->


              <div class="select-menu-no-results js-not-filterable">Nothing to show</div>
          </div> <!-- /.select-menu-list -->


          <div class="select-menu-list js-filter-tab js-filter-tags" data-filterable-for="commitish-filter-field" data-filterable-type="substring" style="display:none;">

              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1rc/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1rc" rel="nofollow">1.1rc</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1b/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1b" rel="nofollow">1.1b</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1a/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1a" rel="nofollow">1.1a</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.13-RC/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.13-RC" rel="nofollow">1.1.13-RC</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target selected">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.13" rel="nofollow">1.1.13</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.12/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.12" rel="nofollow">1.1.12</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.11/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.11" rel="nofollow">1.1.11</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.10/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.10" rel="nofollow">1.1.10</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.9/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.9" rel="nofollow">1.1.9</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.8/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.8" rel="nofollow">1.1.8</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.7/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.7" rel="nofollow">1.1.7</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.6/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.6" rel="nofollow">1.1.6</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.5/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.5" rel="nofollow">1.1.5</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.4/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.4" rel="nofollow">1.1.4</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.3/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.3" rel="nofollow">1.1.3</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.2/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.2" rel="nofollow">1.1.2</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.1/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.1" rel="nofollow">1.1.1</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.1.0/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.1.0" rel="nofollow">1.1.0</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0rc/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0rc" rel="nofollow">1.0rc</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0b/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0b" rel="nofollow">1.0b</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0a/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0a" rel="nofollow">1.0a</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.12/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.12" rel="nofollow">1.0.12</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.11/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.11" rel="nofollow">1.0.11</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.10/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.10" rel="nofollow">1.0.10</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.9/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.9" rel="nofollow">1.0.9</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.8/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.8" rel="nofollow">1.0.8</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.7/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.7" rel="nofollow">1.0.7</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.6/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.6" rel="nofollow">1.0.6</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.5/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.5" rel="nofollow">1.0.5</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.4/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.4" rel="nofollow">1.0.4</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.3/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.3" rel="nofollow">1.0.3</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.2/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.2" rel="nofollow">1.0.2</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.1/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.1" rel="nofollow">1.0.1</a>

              </div> <!-- /.select-menu-item -->
              <div class="select-menu-item js-navigation-item js-navigation-target ">
                <span class="select-menu-checkmark mini-icon mini-icon-confirm"></span>
                    <a href="/yiisoft/yii/blob/1.0.0/framework/zii/widgets/jui/CJuiDatePicker.php" class="js-navigation-open select-menu-item-text js-select-button-text" data-name="1.0.0" rel="nofollow">1.0.0</a>

              </div> <!-- /.select-menu-item -->

            <div class="select-menu-no-results js-not-filterable">Nothing to show</div>

          </div> <!-- /.select-menu-list -->

        </div> <!-- /.select-menu-modal -->
      </div> <!-- /.select-menu-modal-holder -->
    </div> <!-- /.select-menu -->

  </div> <!-- /.scope -->

  <ul class="tabnav-tabs">
    <li><a href="/yiisoft/yii/tree/1.1.13" class="selected tabnav-tab" highlight="repo_source">Files</a></li>
    <li><a href="/yiisoft/yii/commits/1.1.13" class="tabnav-tab" highlight="repo_commits">Commits</a></li>
    <li><a href="/yiisoft/yii/branches" class="tabnav-tab" highlight="repo_branches" rel="nofollow">Branches <span class="counter ">1</span></a></li>
  </ul>

</div>

  
  
  


            
          </div>
        </div><!-- /.repohead -->

        <div id="js-repo-pjax-container" class="container context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:24ee45510f970b4bfd3358c94a0a318d -->
<!-- blob contrib frag key: views10/v8/blob_contributors:v21:24ee45510f970b4bfd3358c94a0a318d -->

<div id="slider">
    <div class="frame-meta">

      <p title="This is a placeholder element" class="js-history-link-replace hidden"></p>
      <div class="breadcrumb">
        <span class='bold'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/yiisoft/yii/tree/1.1.13" class="js-slide-to" data-direction="back" itemscope="url"><span itemprop="title">yii</span></a></span></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/yiisoft/yii/tree/1.1.13/framework" class="js-slide-to" data-direction="back" itemscope="url"><span itemprop="title">framework</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/yiisoft/yii/tree/1.1.13/framework/zii" class="js-slide-to" data-direction="back" itemscope="url"><span itemprop="title">zii</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/yiisoft/yii/tree/1.1.13/framework/zii/widgets" class="js-slide-to" data-direction="back" itemscope="url"><span itemprop="title">widgets</span></a></span> / <span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/yiisoft/yii/tree/1.1.13/framework/zii/widgets/jui" class="js-slide-to" data-direction="back" itemscope="url"><span itemprop="title">jui</span></a></span> / <strong class="final-path">CJuiDatePicker.php</strong> <span class="js-zeroclipboard zeroclipboard-button" data-clipboard-text="framework/zii/widgets/jui/CJuiDatePicker.php" data-copied-hint="copied!" title="copy to clipboard"><span class="mini-icon mini-icon-clipboard"></span></span>
      </div>

      <a href="/yiisoft/yii/find/1.1.13" class="js-slide-to" data-hotkey="t" style="display:none">Show File Finder</a>

        
  <div class="commit file-history-tease">
    <img class="main-avatar" height="24" src="https://secure.gravatar.com/avatar/ef9716bf6d5b21ca987f6909f2d5e878?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
    <span class="author"><a href="/adminnu" rel="author">adminnu</a></span>
    <time class="js-relative-date" datetime="2012-11-30T04:24:50-08:00" title="2012-11-30 04:24:50">November 30, 2012</time>
    <div class="commit-title">
        <a href="/yiisoft/yii/commit/9627c2b599b54e1ba169f95fee86342f87bddbc9" class="message">remove empty($this-&gt;options) in all classes</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>3</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="adminnu" href="/yiisoft/yii/commits/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php?author=adminnu"><img height="20" src="https://secure.gravatar.com/avatar/ef9716bf6d5b21ca987f6909f2d5e878?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="samdark" href="/yiisoft/yii/commits/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php?author=samdark"><img height="20" src="https://secure.gravatar.com/avatar/c13375ba1016846e39bc0e48260d0bb1?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>
    <a class="avatar tooltipped downwards" title="mdomba" href="/yiisoft/yii/commits/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php?author=mdomba"><img height="20" src="https://secure.gravatar.com/avatar/e1481ba900e92536deefb877b651d30d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2>Users on GitHub who have contributed to this file</h2>
      <ul class="facebox-user-list">
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/ef9716bf6d5b21ca987f6909f2d5e878?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/adminnu">adminnu</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/c13375ba1016846e39bc0e48260d0bb1?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/samdark">samdark</a>
        </li>
        <li>
          <img height="24" src="https://secure.gravatar.com/avatar/e1481ba900e92536deefb877b651d30d?s=140&amp;d=https://a248.e.akamai.net/assets.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png" width="24" />
          <a href="/mdomba">mdomba</a>
        </li>
      </ul>
    </div>
  </div>


    </div><!-- ./.frame-meta -->

    <div class="frames">
      <div class="frame" data-permalink-url="/yiisoft/yii/blob/e9e4a0d5be901d8bd48e516a2d9afe33d6fd05a6/framework/zii/widgets/jui/CJuiDatePicker.php" data-title="yii/framework/zii/widgets/jui/CJuiDatePicker.php at 1.1.13 · yiisoft/yii · GitHub" data-type="blob">

        <div id="files" class="bubble">
          <div class="file">
            <div class="meta">
              <div class="info">
                <span class="icon"><b class="mini-icon mini-icon-text-file"></b></span>
                <span class="mode" title="File Mode">file</span>
                  <span>126 lines (114 sloc)</span>
                <span>3.942 kb</span>
              </div>
              <ul class="button-group actions">
                  <li>
                      <a class="grouped-button minibutton bigger lighter js-entice" href=""
                         data-entice="You must be signed in and on a branch to make or propose changes">Edit</a>
                  </li>
                <li><a href="/yiisoft/yii/raw/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php" class="button minibutton grouped-button bigger lighter" id="raw-url">Raw</a></li>
                  <li><a href="/yiisoft/yii/blame/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php" class="button minibutton grouped-button bigger lighter">Blame</a></li>
                <li><a href="/yiisoft/yii/commits/1.1.13/framework/zii/widgets/jui/CJuiDatePicker.php" class="button minibutton grouped-button bigger lighter" rel="nofollow">History</a></li>
              </ul>

            </div>
                <div class="data type-php js-blob-data">
      <table cellpadding="0" cellspacing="0" class="lines">
        <tr>
          <td>
            <pre class="line_numbers"><span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
</pre>
          </td>
          <td width="100%">
                  <div class="highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="sd">/**</span></div><div class='line' id='LC3'><span class="sd"> * CJuiDatePicker class file.</span></div><div class='line' id='LC4'><span class="sd"> *</span></div><div class='line' id='LC5'><span class="sd"> * @author Sebastian Thierer &lt;sebathi@gmail.com&gt;</span></div><div class='line' id='LC6'><span class="sd"> * @link http://www.yiiframework.com/</span></div><div class='line' id='LC7'><span class="sd"> * @copyright Copyright &amp;copy; 2008-2011 Yii Software LLC</span></div><div class='line' id='LC8'><span class="sd"> * @license http://www.yiiframework.com/license/</span></div><div class='line' id='LC9'><span class="sd"> */</span></div><div class='line' id='LC10'><br/></div><div class='line' id='LC11'><span class="nx">Yii</span><span class="o">::</span><span class="na">import</span><span class="p">(</span><span class="s1">&#39;zii.widgets.jui.CJuiInputWidget&#39;</span><span class="p">);</span></div><div class='line' id='LC12'><br/></div><div class='line' id='LC13'><span class="sd">/**</span></div><div class='line' id='LC14'><span class="sd"> * CJuiDatePicker displays a datepicker.</span></div><div class='line' id='LC15'><span class="sd"> *</span></div><div class='line' id='LC16'><span class="sd"> * CJuiDatePicker encapsulates the {@link http://jqueryui.com/demos/datepicker/ JUI</span></div><div class='line' id='LC17'><span class="sd"> * datepicker} plugin.</span></div><div class='line' id='LC18'><span class="sd"> *</span></div><div class='line' id='LC19'><span class="sd"> * To use this widget, you may insert the following code in a view:</span></div><div class='line' id='LC20'><span class="sd"> * &lt;pre&gt;</span></div><div class='line' id='LC21'><span class="sd"> * $this-&gt;widget(&#39;zii.widgets.jui.CJuiDatePicker&#39;,array(</span></div><div class='line' id='LC22'><span class="sd"> *     &#39;name&#39;=&gt;&#39;publishDate&#39;,</span></div><div class='line' id='LC23'><span class="sd"> *     // additional javascript options for the date picker plugin</span></div><div class='line' id='LC24'><span class="sd"> *     &#39;options&#39;=&gt;array(</span></div><div class='line' id='LC25'><span class="sd"> *         &#39;showAnim&#39;=&gt;&#39;fold&#39;,</span></div><div class='line' id='LC26'><span class="sd"> *     ),</span></div><div class='line' id='LC27'><span class="sd"> *     &#39;htmlOptions&#39;=&gt;array(</span></div><div class='line' id='LC28'><span class="sd"> *         &#39;style&#39;=&gt;&#39;height:20px;&#39;</span></div><div class='line' id='LC29'><span class="sd"> *     ),</span></div><div class='line' id='LC30'><span class="sd"> * ));</span></div><div class='line' id='LC31'><span class="sd"> * &lt;/pre&gt;</span></div><div class='line' id='LC32'><span class="sd"> *</span></div><div class='line' id='LC33'><span class="sd"> * By configuring the {@link options} property, you may specify the options</span></div><div class='line' id='LC34'><span class="sd"> * that need to be passed to the JUI datepicker plugin. Please refer to</span></div><div class='line' id='LC35'><span class="sd"> * the {@link http://jqueryui.com/demos/datepicker/ JUI datepicker} documentation</span></div><div class='line' id='LC36'><span class="sd"> * for possible options (name-value pairs).</span></div><div class='line' id='LC37'><span class="sd"> *</span></div><div class='line' id='LC38'><span class="sd"> * @author Sebastian Thierer &lt;sebathi@gmail.com&gt;</span></div><div class='line' id='LC39'><span class="sd"> * @package zii.widgets.jui</span></div><div class='line' id='LC40'><span class="sd"> * @since 1.1</span></div><div class='line' id='LC41'><span class="sd"> */</span></div><div class='line' id='LC42'><span class="k">class</span> <span class="nc">CJuiDatePicker</span> <span class="k">extends</span> <span class="nx">CJuiInputWidget</span></div><div class='line' id='LC43'><span class="p">{</span></div><div class='line' id='LC44'>	<span class="sd">/**</span></div><div class='line' id='LC45'><span class="sd">	 * @var string the locale ID (eg &#39;fr&#39;, &#39;de&#39;) for the language to be used by the date picker.</span></div><div class='line' id='LC46'><span class="sd">	 * If this property is not set, I18N will not be involved. That is, the date picker will show in English.</span></div><div class='line' id='LC47'><span class="sd">	 * You can force English language by setting the language attribute as &#39;&#39; (empty string)</span></div><div class='line' id='LC48'><span class="sd">	 */</span></div><div class='line' id='LC49'>	<span class="k">public</span> <span class="nv">$language</span><span class="p">;</span></div><div class='line' id='LC50'>	<span class="sd">/**</span></div><div class='line' id='LC51'><span class="sd">	 * @var string The i18n Jquery UI script file. It uses scriptUrl property as base url.</span></div><div class='line' id='LC52'><span class="sd">	 */</span></div><div class='line' id='LC53'>	<span class="k">public</span> <span class="nv">$i18nScriptFile</span><span class="o">=</span><span class="s1">&#39;jquery-ui-i18n.min.js&#39;</span><span class="p">;</span></div><div class='line' id='LC54'>	<span class="sd">/**</span></div><div class='line' id='LC55'><span class="sd">	 * @var array The default options called just one time per request. This options will alter every other CJuiDatePicker instance in the page.</span></div><div class='line' id='LC56'><span class="sd">	 * It has to be set at the first call of CJuiDatePicker widget in the request.</span></div><div class='line' id='LC57'><span class="sd">	 */</span></div><div class='line' id='LC58'>	<span class="k">public</span> <span class="nv">$defaultOptions</span><span class="p">;</span></div><div class='line' id='LC59'>	<span class="sd">/**</span></div><div class='line' id='LC60'><span class="sd">	 * @var boolean If true, shows the widget as an inline calendar and the input as a hidden field.</span></div><div class='line' id='LC61'><span class="sd">	 */</span></div><div class='line' id='LC62'>	<span class="k">public</span> <span class="nv">$flat</span><span class="o">=</span><span class="k">false</span><span class="p">;</span></div><div class='line' id='LC63'><br/></div><div class='line' id='LC64'>	<span class="sd">/**</span></div><div class='line' id='LC65'><span class="sd">	 * Run this widget.</span></div><div class='line' id='LC66'><span class="sd">	 * This method registers necessary javascript and renders the needed HTML code.</span></div><div class='line' id='LC67'><span class="sd">	 */</span></div><div class='line' id='LC68'>	<span class="k">public</span> <span class="k">function</span> <span class="nf">run</span><span class="p">()</span></div><div class='line' id='LC69'>	<span class="p">{</span></div><div class='line' id='LC70'>		<span class="k">list</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span><span class="nv">$id</span><span class="p">)</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">resolveNameID</span><span class="p">();</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>		<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">]))</span></div><div class='line' id='LC73'>			<span class="nv">$id</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">];</span></div><div class='line' id='LC74'>		<span class="k">else</span></div><div class='line' id='LC75'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">]</span><span class="o">=</span><span class="nv">$id</span><span class="p">;</span></div><div class='line' id='LC76'>		<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]))</span></div><div class='line' id='LC77'>			<span class="nv">$name</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">];</span></div><div class='line' id='LC78'><br/></div><div class='line' id='LC79'>		<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">flat</span><span class="o">===</span><span class="k">false</span><span class="p">)</span></div><div class='line' id='LC80'>		<span class="p">{</span></div><div class='line' id='LC81'>			<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hasModel</span><span class="p">())</span></div><div class='line' id='LC82'>				<span class="k">echo</span> <span class="nx">CHtml</span><span class="o">::</span><span class="na">activeTextField</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">model</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attribute</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">);</span></div><div class='line' id='LC83'>			<span class="k">else</span></div><div class='line' id='LC84'>				<span class="k">echo</span> <span class="nx">CHtml</span><span class="o">::</span><span class="na">textField</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">value</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">);</span></div><div class='line' id='LC85'>		<span class="p">}</span></div><div class='line' id='LC86'>		<span class="k">else</span></div><div class='line' id='LC87'>		<span class="p">{</span></div><div class='line' id='LC88'>			<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">hasModel</span><span class="p">())</span></div><div class='line' id='LC89'>			<span class="p">{</span></div><div class='line' id='LC90'>				<span class="k">echo</span> <span class="nx">CHtml</span><span class="o">::</span><span class="na">activeHiddenField</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">model</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attribute</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">);</span></div><div class='line' id='LC91'>				<span class="nv">$attribute</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">attribute</span><span class="p">;</span></div><div class='line' id='LC92'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="s1">&#39;defaultDate&#39;</span><span class="p">]</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">model</span><span class="o">-&gt;</span><span class="nv">$attribute</span><span class="p">;</span></div><div class='line' id='LC93'>			<span class="p">}</span></div><div class='line' id='LC94'>			<span class="k">else</span></div><div class='line' id='LC95'>			<span class="p">{</span></div><div class='line' id='LC96'>				<span class="k">echo</span> <span class="nx">CHtml</span><span class="o">::</span><span class="na">hiddenField</span><span class="p">(</span><span class="nv">$name</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">value</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">);</span></div><div class='line' id='LC97'>				<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="s1">&#39;defaultDate&#39;</span><span class="p">]</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">value</span><span class="p">;</span></div><div class='line' id='LC98'>			<span class="p">}</span></div><div class='line' id='LC99'><br/></div><div class='line' id='LC100'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">[</span><span class="s1">&#39;altField&#39;</span><span class="p">]</span><span class="o">=</span><span class="s1">&#39;#&#39;</span><span class="o">.</span><span class="nv">$id</span><span class="p">;</span></div><div class='line' id='LC101'><br/></div><div class='line' id='LC102'>			<span class="nv">$id</span><span class="o">=</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;id&#39;</span><span class="p">]</span><span class="o">=</span><span class="nv">$id</span><span class="o">.</span><span class="s1">&#39;_container&#39;</span><span class="p">;</span></div><div class='line' id='LC103'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">[</span><span class="s1">&#39;name&#39;</span><span class="p">]</span><span class="o">=</span><span class="nv">$name</span><span class="o">.</span><span class="s1">&#39;_container&#39;</span><span class="p">;</span></div><div class='line' id='LC104'><br/></div><div class='line' id='LC105'>			<span class="k">echo</span> <span class="nx">CHtml</span><span class="o">::</span><span class="na">tag</span><span class="p">(</span><span class="s1">&#39;div&#39;</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">htmlOptions</span><span class="p">,</span><span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC106'>		<span class="p">}</span></div><div class='line' id='LC107'><br/></div><div class='line' id='LC108'>		<span class="nv">$options</span><span class="o">=</span><span class="nx">CJavaScript</span><span class="o">::</span><span class="na">encode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">options</span><span class="p">);</span></div><div class='line' id='LC109'>		<span class="nv">$js</span> <span class="o">=</span> <span class="s2">&quot;jQuery(&#39;#</span><span class="si">{</span><span class="nv">$id</span><span class="si">}</span><span class="s2">&#39;).datepicker(</span><span class="si">$options</span><span class="s2">);&quot;</span><span class="p">;</span></div><div class='line' id='LC110'><br/></div><div class='line' id='LC111'>		<span class="k">if</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="o">!=</span><span class="s1">&#39;&#39;</span> <span class="o">&amp;&amp;</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="o">!=</span><span class="s1">&#39;en&#39;</span><span class="p">)</span></div><div class='line' id='LC112'>		<span class="p">{</span></div><div class='line' id='LC113'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">registerScriptFile</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">i18nScriptFile</span><span class="p">);</span></div><div class='line' id='LC114'>			<span class="nv">$js</span> <span class="o">=</span> <span class="s2">&quot;jQuery(&#39;#</span><span class="si">{</span><span class="nv">$id</span><span class="si">}</span><span class="s2">&#39;).datepicker(jQuery.extend({showMonthAfterYear:false},jQuery.datepicker.regional[&#39;</span><span class="si">{</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">language</span><span class="si">}</span><span class="s2">&#39;],</span><span class="si">{</span><span class="nv">$options</span><span class="si">}</span><span class="s2">));&quot;</span><span class="p">;</span></div><div class='line' id='LC115'>		<span class="p">}</span></div><div class='line' id='LC116'><br/></div><div class='line' id='LC117'>		<span class="nv">$cs</span> <span class="o">=</span> <span class="nx">Yii</span><span class="o">::</span><span class="na">app</span><span class="p">()</span><span class="o">-&gt;</span><span class="na">getClientScript</span><span class="p">();</span></div><div class='line' id='LC118'><br/></div><div class='line' id='LC119'>		<span class="k">if</span><span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">defaultOptions</span><span class="p">))</span></div><div class='line' id='LC120'>		<span class="p">{</span></div><div class='line' id='LC121'>			<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">registerScriptFile</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">i18nScriptFile</span><span class="p">);</span></div><div class='line' id='LC122'>			<span class="nv">$cs</span><span class="o">-&gt;</span><span class="na">registerScript</span><span class="p">(</span><span class="nx">__CLASS__</span><span class="p">,</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">defaultOptions</span><span class="o">!==</span><span class="k">null</span><span class="o">?</span><span class="s1">&#39;jQuery.datepicker.setDefaults(&#39;</span><span class="o">.</span><span class="nx">CJavaScript</span><span class="o">::</span><span class="na">encode</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">defaultOptions</span><span class="p">)</span><span class="o">.</span><span class="s1">&#39;);&#39;</span><span class="o">:</span><span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC123'>		<span class="p">}</span></div><div class='line' id='LC124'>		<span class="nv">$cs</span><span class="o">-&gt;</span><span class="na">registerScript</span><span class="p">(</span><span class="nx">__CLASS__</span><span class="o">.</span><span class="s1">&#39;#&#39;</span><span class="o">.</span><span class="nv">$id</span><span class="p">,</span><span class="nv">$js</span><span class="p">);</span></div><div class='line' id='LC125'>	<span class="p">}</span></div><div class='line' id='LC126'><span class="p">}</span></div></pre></div>
          </td>
        </tr>
      </table>
  </div>

          </div>
        </div>

        <a href="#jump-to-line" rel="facebox" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
        <div id="jump-to-line" style="display:none">
          <h2>Jump to Line</h2>
          <form accept-charset="UTF-8" class="js-jump-to-line-form">
            <input class="textfield js-jump-to-line-field" type="text">
            <div class="full-button">
              <button type="submit" class="button">Go</button>
            </div>
          </form>
        </div>

      </div>
    </div>
</div>

<div id="js-frame-loading-template" class="frame frame-loading large-loading-area" style="display:none;">
  <img class="js-frame-loading-spinner" src="https://a248.e.akamai.net/assets.github.com/images/spinners/octocat-spinner-128.gif?1347543529" height="64" width="64">
</div>


        </div>
      </div>
      <div class="context-overlay"></div>
    </div>

      <div id="footer-push"></div><!-- hack for sticky footer -->
    </div><!-- end of wrapper - hack for sticky footer -->

      <!-- footer -->
      <div id="footer">
  <div class="container clearfix">

      <dl class="footer_nav">
        <dt>GitHub</dt>
        <dd><a href="https://github.com/about">About us</a></dd>
        <dd><a href="https://github.com/blog">Blog</a></dd>
        <dd><a href="https://github.com/contact">Contact &amp; support</a></dd>
        <dd><a href="http://enterprise.github.com/">GitHub Enterprise</a></dd>
        <dd><a href="http://status.github.com/">Site status</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Applications</dt>
        <dd><a href="http://mac.github.com/">GitHub for Mac</a></dd>
        <dd><a href="http://windows.github.com/">GitHub for Windows</a></dd>
        <dd><a href="http://eclipse.github.com/">GitHub for Eclipse</a></dd>
        <dd><a href="http://mobile.github.com/">GitHub mobile apps</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Services</dt>
        <dd><a href="http://get.gaug.es/">Gauges: Web analytics</a></dd>
        <dd><a href="http://speakerdeck.com">Speaker Deck: Presentations</a></dd>
        <dd><a href="https://gist.github.com">Gist: Code snippets</a></dd>
        <dd><a href="http://jobs.github.com/">Job board</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>Documentation</dt>
        <dd><a href="http://help.github.com/">GitHub Help</a></dd>
        <dd><a href="http://developer.github.com/">Developer API</a></dd>
        <dd><a href="http://github.github.com/github-flavored-markdown/">GitHub Flavored Markdown</a></dd>
        <dd><a href="http://pages.github.com/">GitHub Pages</a></dd>
      </dl>

      <dl class="footer_nav">
        <dt>More</dt>
        <dd><a href="http://training.github.com/">Training</a></dd>
        <dd><a href="https://github.com/edu">Students &amp; teachers</a></dd>
        <dd><a href="http://shop.github.com">The Shop</a></dd>
        <dd><a href="/plans">Plans &amp; pricing</a></dd>
        <dd><a href="http://octodex.github.com/">The Octodex</a></dd>
      </dl>

      <hr class="footer-divider">


    <p class="right">&copy; 2013 <span title="0.07297s from fe13.rs.github.com">GitHub</span> Inc. All rights reserved.</p>
    <a class="left" href="https://github.com/">
      <span class="mega-icon mega-icon-invertocat"></span>
    </a>
    <ul id="legal">
        <li><a href="https://github.com/site/terms">Terms of Service</a></li>
        <li><a href="https://github.com/site/privacy">Privacy</a></li>
        <li><a href="https://github.com/security">Security</a></li>
    </ul>

  </div><!-- /.container -->

</div><!-- /.#footer -->


    

    

<div id="keyboard_shortcuts_pane" class="instapaper_ignore readability-extra" style="display:none">
  <h2>Keyboard Shortcuts <small><a href="#" class="js-see-all-keyboard-shortcuts">(see all)</a></small></h2>

  <div class="columns threecols">
    <div class="column first">
      <h3>Site wide shortcuts</h3>
      <dl class="keyboard-mappings">
        <dt>s</dt>
        <dd>Focus command bar</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>?</dt>
        <dd>Bring up this help dialog</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column middle" style='display:none'>
      <h3>Commit list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>c <em>or</em> o <em>or</em> enter</dt>
        <dd>Open commit</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>y</dt>
        <dd>Expand URL to its canonical form</dd>
      </dl>
    </div><!-- /.column.first -->

    <div class="column last js-hidden-pane" style='display:none'>
      <h3>Pull request list</h3>
      <dl class="keyboard-mappings">
        <dt>j</dt>
        <dd>Move selection down</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>k</dt>
        <dd>Move selection up</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt>o <em>or</em> enter</dt>
        <dd>Open issue</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
        <dd>Submit comment</dd>
      </dl>
      <dl class="keyboard-mappings">
        <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
        <dd>Preview comment</dd>
      </dl>
    </div><!-- /.columns.last -->

  </div><!-- /.columns.equacols -->

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>x</dt>
          <dd>Toggle selection</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> shift p</dt>
          <dd>Preview comment</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>c</dt>
          <dd>Create issue</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Create label</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>i</dt>
          <dd>Back to inbox</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>u</dt>
          <dd>Back to issues</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>/</dt>
          <dd>Focus issues search</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Issues Dashboard</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open issue</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>

    <h3>Network Graph</h3>
    <div class="columns equacols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt><span class="badmono">←</span> <em>or</em> h</dt>
          <dd>Scroll left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">→</span> <em>or</em> l</dt>
          <dd>Scroll right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↑</span> <em>or</em> k</dt>
          <dd>Scroll up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt><span class="badmono">↓</span> <em>or</em> j</dt>
          <dd>Scroll down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Toggle visibility of head labels</dd>
        </dl>
      </div><!-- /.column.first -->
      <div class="column last">
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">←</span> <em>or</em> shift h</dt>
          <dd>Scroll all the way left</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">→</span> <em>or</em> shift l</dt>
          <dd>Scroll all the way right</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↑</span> <em>or</em> shift k</dt>
          <dd>Scroll all the way up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift <span class="badmono">↓</span> <em>or</em> shift j</dt>
          <dd>Scroll all the way down</dd>
        </dl>
      </div><!-- /.column.last -->
    </div>
  </div>

  <div class="js-hidden-pane" >
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first js-hidden-pane" >
        <h3>Source Code Browsing</h3>
        <dl class="keyboard-mappings">
          <dt>t</dt>
          <dd>Activates the file finder</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>l</dt>
          <dd>Jump to line</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>w</dt>
          <dd>Switch branch/tag</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>y</dt>
          <dd>Expand URL to its canonical form</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <div class="columns threecols">
      <div class="column first">
        <h3>Browsing Commits</h3>
        <dl class="keyboard-mappings">
          <dt><span class="platform-mac">⌘</span><span class="platform-other">ctrl</span> <em>+</em> enter</dt>
          <dd>Submit comment</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>escape</dt>
          <dd>Close form</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>p</dt>
          <dd>Parent commit</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o</dt>
          <dd>Other parent commit</dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="js-hidden-pane" style='display:none'>
    <div class="rule"></div>
    <h3>Notifications</h3>

    <div class="columns threecols">
      <div class="column first">
        <dl class="keyboard-mappings">
          <dt>j</dt>
          <dd>Move selection down</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>k</dt>
          <dd>Move selection up</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>o <em>or</em> enter</dt>
          <dd>Open notification</dd>
        </dl>
      </div><!-- /.column.first -->

      <div class="column second">
        <dl class="keyboard-mappings">
          <dt>e <em>or</em> shift i <em>or</em> y</dt>
          <dd>Mark as read</dd>
        </dl>
        <dl class="keyboard-mappings">
          <dt>shift m</dt>
          <dd>Mute thread</dd>
        </dl>
      </div><!-- /.column.first -->
    </div>
  </div>

</div>

    <div id="markdown-help" class="instapaper_ignore readability-extra">
  <h2>Markdown Cheat Sheet</h2>

  <div class="cheatsheet-content">

  <div class="mod">
    <div class="col">
      <h3>Format Text</h3>
      <p>Headers</p>
      <pre>
# This is an &lt;h1&gt; tag
## This is an &lt;h2&gt; tag
###### This is an &lt;h6&gt; tag</pre>
     <p>Text styles</p>
     <pre>
*This text will be italic*
_This will also be italic_
**This text will be bold**
__This will also be bold__

*You **can** combine them*
</pre>
    </div>
    <div class="col">
      <h3>Lists</h3>
      <p>Unordered</p>
      <pre>
* Item 1
* Item 2
  * Item 2a
  * Item 2b</pre>
     <p>Ordered</p>
     <pre>
1. Item 1
2. Item 2
3. Item 3
   * Item 3a
   * Item 3b</pre>
    </div>
    <div class="col">
      <h3>Miscellaneous</h3>
      <p>Images</p>
      <pre>
![GitHub Logo](/images/logo.png)
Format: ![Alt Text](url)
</pre>
     <p>Links</p>
     <pre>
http://github.com - automatic!
[GitHub](http://github.com)</pre>
<p>Blockquotes</p>
     <pre>
As Kanye West said:

> We're living the future so
> the present is our past.
</pre>
    </div>
  </div>
  <div class="rule"></div>

  <h3>Code Examples in Markdown</h3>
  <div class="col">
      <p>Syntax highlighting with <a href="http://github.github.com/github-flavored-markdown/" title="GitHub Flavored Markdown" target="_blank">GFM</a></p>
      <pre>
```javascript
function fancyAlert(arg) {
  if(arg) {
    $.facebox({div:'#foo'})
  }
}
```</pre>
    </div>
    <div class="col">
      <p>Or, indent your code 4 spaces</p>
      <pre>
Here is a Python code example
without syntax highlighting:

    def foo:
      if not bar:
        return true</pre>
    </div>
    <div class="col">
      <p>Inline code for comments</p>
      <pre>
I think you should use an
`&lt;addr&gt;` element here instead.</pre>
    </div>
  </div>

  </div>
</div>


    <div id="ajax-error-message" class="flash flash-error">
      <span class="mini-icon mini-icon-exclamation"></span>
      Something went wrong with that request. Please try again.
      <a href="#" class="mini-icon mini-icon-remove-close ajax-error-dismiss"></a>
    </div>

    
    
    <span id='server_response_time' data-time='0.07416' data-host='fe13'></span>
    
  </body>
</html>

