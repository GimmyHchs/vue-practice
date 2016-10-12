@extends('vue.layout.vue-layout')
@section('title', 'Vue Using ChartJs Libs')
@section('app')
    <h1>Vue Using ChartJs Libs</h1>

    <h3>Basic Usage</h3>
    <ul>
        <li>Default size :  <span class="warning">RWD</span></li>
        <li>Default data :  <span class="warning">[40, 60, 45, 70]</span></li>
        <li>Default labels :  <span class="warning">['first', 'second', 'third', 'fourth']</span></li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line></chartjs-line>'}}</code></pre>
    <chartjs-line></chartjs-line>
    <hr>


    <h3>Set Hight and Width</h3>
    <ul>
        <li>RWD will <span class="error">lose efficacy</span></li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :width="300" :height="500"></chartjs-line>'}}</code></pre>
    <chartjs-line :width="300" :height="500"></chartjs-line>
    <hr>


    <h3>Set Labels and Data</h3>
    <ul>
        <li>Labels : <span class="warning">Array</span></li>
        <li>Value in Labels : <span class="warning">String</span></li>
        <li>Data : <span class="warning">Array</span></li>
        <li>Value in Data : <span class="error">Number</span></li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-line>'}}</code></pre>
    <chartjs-line :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-line>

    <h3>Set Fill Boolean</h3>
    <ul>
        <li>fill : If true, <span class="warning">fill the area</span> under the line 0 to draw straightlines.</li>
        <li>fill : Default = false</li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :fill="true"></chartjs-line>'}}</code></pre>
    <chartjs-line :fill="true"></chartjs-line>


    <h3>Set Line Tension</h3>
    <ul>
        <li>linetension : Bezier curve tension of the line. Set to <span class="warning">0 to draw straightlines</span>.</li>
        <li>linetension : Default = 0.2</li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :linetension="0"></chartjs-line>'}}</code></pre>
    <chartjs-line :linetension="0"></chartjs-line>

    <h3>Set Color</h3>
    <ul>
        <li>Color support format :  <span class="warning">#00c853</span> and <span class="warning">rgba(75,192,192,1)</span></li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :bordercolor="\'#00c853\'"></chartjs-line>'}}</code></pre>
    or
    <pre><code class="language-markup">{{'<chartjs-line bordercolor="#00c853"></chartjs-line>'}}</code></pre>
    <chartjs-line :bordercolor="'#00c853'"></chartjs-line>
@endsection
@section('style')
    <style>
        .success{
            color:#00c853;
            font-weight: bold;
        }
        .warning{
            color:#8e24aa;
            font-weight: bold;
        }
        .error{
            color:#e64a19;
            font-weight: bold;
        }
    </style>
@endsection
