<?php require_once("_doctype.php"); ?>
  <title>Groundwork CSS &hearts;</title>
<?php require_once("_head.php"); ?>
<?php require_once("_header.php"); ?>
  <div class="container">
    <div class="row">
      <div class="one third padded">
        <h1><i class="icon-text-width"></i> ResponsiveText</h1>
        <p></p>
      </div>
      <div class="two thirds padded">
        <h2>Example Usage:</h2>
        <code>
<pre>&lt;<tag>h1</tag> class=&quot;<span>responsive</span>&quot; data-scale=&quot;<span>8.5</span>&quot; data-min=&quot;<span>20</span>&quot; data-max=&quot;<span>170</span>&quot;&gt;<content>Responsive Heading</content>&lt;/<tag>h1</tag>&gt;</pre>
<pre>&lt;<tag>h1</tag> class=&quot;<span>responsive</span>&quot; data-scale=&quot;<span>9.4</span>&quot; data-min=&quot;<span>20</span>&quot; data-max=&quot;<span>170</span>&quot;&gt;<content>A Responsive Heading You Want To Wrap</content>&lt;/<tag>h1</tag>&gt;</pre>
        </code>
        <hr/>
        <h2>Result:</h2>
        <h1 class="responsive">No Options</h1>
        <h1 class="responsive" data-scale="12.2" data-min="20" data-max="170">A Longer Responsive Heading</h1>
        <h3 class="responsive" data-scale="9.4" data-min="20" data-max="170">A Responsive Heading<br/>You Want To Wrap</h3>
      </div>
    </div>
  </div>
<?php require_once("_scripts.php"); ?>