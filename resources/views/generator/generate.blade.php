@extends('layouts.master')

@section('title', 'Generate')

@section('content')
<div class="content" style="padding-bottom:0;">
    <h1>Workout Generator</h1>
    <div class="generator">
        <div class="fs-div">
            <form method="post" action="/generate/workout">
                <fieldset>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <legend>Background Info:</legend>
                    <label>What is your primary goal?:</label>
                    <br />
                    <br />
                    <select name='goal'>
                        <option value="strength">Gain Strength</option>
                        <option value="endurance">Gain Endurance</option>
                        <option value="definition">Gain Definition</option>
                    </select>
                    <br />
                    <br />
                    <br />
                    <label>Which of the following equipment/exercise styles do you have access to and enjoy doing? Check all that apply:</label>
                    <br />
                    <br />
                    <input type="checkbox" name="free_weights" id="free-weights" value="free_weights" onClick="control()">Free Weights
                    <br />
                    <input type="checkbox" name="dumbbells" id="dumbbells" value="dumbbells" disabled><span class="dtext">Dumbbells</span>
                    <br />
                    <input type="checkbox" name="barbells" id="barbells" value="barbells" disabled><span class="dtext">Barbells</span>
                    <br />
                    <input type="checkbox" name="selectorized" value="selectorized">Selectorized Equipment
                    <br />
                    <input type="checkbox" name="cables" value="cables">Cable Equipment
                    <br />
                    <input type="checkbox" name="calisthenics" value="calisthenics">Calisthenics
                    <br />
                    <br />
                    <br />
                    <label>How long have you consistently followed an exercise routine?</label>
                    <br />
                    <br />
                    <select name="years">
                        <option value="0">0 years</option>
                        <option value="1">1 year</option>
                        <option value="2">2+ years</option>
                    </select>
                    <select name="months">
                        <?php 
                        for ($i = 0; $i <= 11; $i++) {
                            echo "<option value=\"{$i}\">{$i} months</option>";
                        }
                        ?>
                    </select>
                    <br />
                    <br />
                    <br />
                    <label>How many days would you like to workout this week?</label>
                    <br />
                    <br />
                    <select name="frequency">
                        <?php
                        for ($i = 1; $i <= 6; $i++) {
                            echo "<option value=\"{$i}\">{$i}</option>";
                        }
                        ?>
                    </select>
                    <br />
                    <br />
                    <button name="submit" class="home-button">Generate My Workout!</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
<script>
var fw = document.getElementById("free-weights");
var db = document.getElementById("dumbbells");
var bb = document.getElementById("barbells");
var dtext = document.getElementsByClassName("dtext");
for (var i = 0; i < dtext.length; i++) {
    dtext[i].style.color = "#CCCCCC";
};
function control () {
    if (fw.checked === true) {
        db.disabled = false;
        bb.disabled = false;
    for (var i = 0; i < dtext.length; i++) {
        dtext[i].style.color = "#000000";
    };
    } else {
        db.disabled = true;
        bb.disabled = true;
        for (var i = 0; i < dtext.length; i++) {
            dtext[i].style.color = "#CCCCCC";
        };
    }
};
</script>
@endsection
