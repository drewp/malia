<?php

$this->getLayout()->body_scripts .= '<script src="/lib/bootstrap-notify/js/bootstrap-notify.js?build=' . $this->cfg['build'] . '"></script>';
$this->getLayout()->head_css .= '<link href="/lib/bootstrap-notify/css/bootstrap-notify.css?build=' . $this->cfg['build'] . '" rel="stylesheet">';

$this->getLayout()->body_scripts .= '<script src="/js/event-emitter.js?build=' . $this->cfg['build'] . '"></script>';
$this->getLayout()->body_scripts .= '<script src="/js/view.js?build=' . $this->cfg['build'] . '"></script>';
$this->getLayout()->body_scripts .= '<script src="/js/learn.js?build=' . $this->cfg['build'] . '"></script>';

?>

<div class="notifications top-right"></div>

<div id="learnApp">
    <div class="learnTextPanel">
        <div id="learnTextContainer" class="textPanel"></div>
        <textarea id="learnTextEditor" class="textPanel hidden">Click &quot;Edit Text&quot; to add your text.</textarea>
    </div>

    <div class="controlsPanel">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <button id="btnLearnRetry" class="btn-learn-retry btn btn-danger btn-lg" tabindex="3" disabled="disabled" title="Cancel current word record and try again. Keys: Backspace">
                    <span class="glyphicon glyphicon-repeat" aria-hidden="true"></span> Retry Word
                </button>
            </div>
            <div class="col-md-4 col-sm-4" style="text-align: center">
                <button id="btnLearnToggleRecording" class="btn btn-primary btn-lg" tabindex="1" title="Start/stop recording process. Keys: Ctrl + Enter to enter mode, Esc - to exit mode">
                    <span class="glyphicon glyphicon-ice-lolly" aria-hidden="true"></span> <span class="caption">Start Recording</span>
                </button>
            </div>
            <div class="col-md-4 col-sm-4">
                <button id="btnLearnNext" class="btn btn-success btn-lg pull-right" tabindex="2" disabled="disabled" title="Save current word and record the next one. Keys: Space or Enter">
                    Next Word <span class="glyphicon glyphicon-step-forward" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-4" style="text-align: center">
                <button id="btnFullScreen" class="btn btn-default btn-lg" tabindex="4" title="Switch to read mode. Keys: Alt + Enter to enter or exit fullscreen mode">
                    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> <span class="caption">Full Screen</span>
                </button>
            </div>
            <div class="col-md-4" style="text-align: center">
                <button id="btnLearnToggleEdit" class="btn btn-default btn-lg" tabindex="4" title="Modify current text. Keys: Esc - to exit edit mode">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> <span class="caption">Edit Text</span>
                </button>
            </div>
            <div class="col-md-4" style="text-align: center">
                <button id="btnSkipWord" class="btn btn-default btn-lg" tabindex="4" disabled="disabled" title="Modify current text. Keys: Esc - to exit edit mode">
                    <span class="caption">Skip Word</span> <span class="glyphicon glyphicon-fast-forward" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="overlayContainer">
    <div class="overlay"></div>
    <div class="overlayText">Loading...</div>
</div>
