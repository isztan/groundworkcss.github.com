<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="one third padded">
        <h1><i class="icon-sign-blank"></i> Buttons</h1>
        <p>Who doesn't need buttons? Groundwork comes packed with useful button styles that can be easily customized to fit your needs.</p>
        <h6>Example usage:</h6>
        <code>
<pre>&lt;<tag>a</tag> class=&quot;<span>small button</span>&quot;&gt;<content>Small Button</content>&lt;/<tag>a</tag>&gt;</pre>
<pre>&lt;<tag>a</tag> class=&quot;<span>success button</span>&quot;&gt;<content>Normal Success</content>&lt;/<tag>a</tag>&gt;</pre>
<pre>&lt;<tag>a</tag> class=&quot;<span>large error button</span>&quot;&gt;<content>Large Error</content>&lt;/<tag>a</tag>&gt;</pre>
<pre>&lt;<tag>ul</tag> class=&quot;<span>button-list</span>&quot;&gt;</pre>
<pre>  &lt;<tag>li</tag>&gt;&lt;<tag>a</tag> href=&quot;<span>#</span>&quot; class=&quot;<span>active</span>&quot;&gt;<content>Button 1</content>&lt;/<tag>a</tag>&gt;&lt;/<tag>li</tag>&gt;</pre>
<pre>  &lt;<tag>li</tag>&gt;&lt;<tag>a</tag> href=&quot;<span>#</span>&quot;&gt;<content>Button 2</content>&lt;/<tag>a</tag>&gt;&lt;/<tag>li</tag>&gt;</pre>
<pre>  &lt;<tag>li</tag>&gt;&lt;<tag>a</tag> href=&quot;<span>#</span>&quot; class=&quot;<span>disabled</span>&quot;&gt;<content>Button 3</content>&lt;/<tag>a</tag>&gt;&lt;/<tag>li</tag>&gt;</pre>
<pre>&lt;/<tag>ul</tag>&gt;</pre>
        </code>
        <hr/>
        <h6>Result:</h6>
        <p><a class="small button">Small Button</a></p>
        <p><a class="success button">Normal Success</a></p>
        <p><a class="large error button">Large Error</a></p>
        <ul class="button-list">
          <li><a href="#" class="active">Button 1</a></li>
          <li><a href="#">Button 2</a></li>
          <li><a href="#" class="disabled">Button 3</a></li>
        </ul>
      </div>
      <div class="two thirds padded">
        <h2>Button Sizes, Types &amp; Styles</h2>
        <div class="row">
          <div class="one third padded">
            <h2>Button Sizes</h2>
            <p><button class="small">Small Button</button></p>
            <p><button>Medium Button</button></p>
            <p><button class="large">Large Button</button></p>
          </div>
          <div class="one third padded">
            <h2>Button Types</h2>
            <p><button>Normal Button</button></p>
            <p><button class="error">Error Button</button></p>
            <p><button class="warning">Warning Button</button></p>
            <p><button class="success">Success Button</button></p>
            <p><button class="disabled">Disabled Button</button></p>
          </div>
          <div class="one third padded">
            <h2>Button Styles</h2>
            <p><button>Normal Button</button></p>
            <p><button class="square">Square Button</button></p>
            <p><button class="round">Round Button</button></p>
            <p><button class="block">Block Button</button></p>
          </div>
        </div>

        <hr/>

        <h2>Button Lists</h2>
        <ul class="button-list">
          <li><a href="#">Button 1</a></li>
          <li><a href="#">Button 2</a></li>
          <li><a href="#">Button 3</a></li>
        </ul>

        <hr/>

        <h2>Menu Buttons</h2>
        <span class="dropdown button">Dropdown Menu Button
          <ul>
            <li><a href="#">Example Menu Item 1</a></li>
            <li><a href="#">Example Menu Item 2</a></li>
            <hr/>
            <li><a href="#">Seperated Menu Item</a></li>
          </ul>
        </span>
      </div>
    </div>
  </div>
<?php require_once("_scripts.php"); ?>