@extends('vue.layout.vue-layout')
@section('title', 'Vue Using ChartJs Libs')
@section('app')
    <h1>Vue Using ChartJs Libs</h1>
    <h3>Basic Usage</h3>
    <ul>
        <li>Default size : RWD</li>
        <li>Default data : [40, 60, 45, 70]</li>
        <li>Default labels : ['first', 'second', 'third', 'fourth']</li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line></chartjs-line>'}}</code></pre>
    <chartjs-line></chartjs-line>
    <hr>
    <h3>Set Hight and Width</h3>
    <ul>
        <li>RWD will lose efficacy</li>
    </ul>
    <pre><code class="language-markup">{{'<chartjs-line :width="300" :height="300"></chartjs-line>'}}</code></pre>
    <chartjs-line :width="300" :height="300"></chartjs-line>
    <hr>
    <pre><code class="language-markup">{{'<chartjs-line :labels="[\'happy\',\'myhappy\',\'hello\']" :data="[100,40,60]"></chartjs-line>'}}</code></pre>
    <chartjs-line :labels="['happy','myhappy','hello']" :data="[100,40,60]"></chartjs-line>
@endsection
