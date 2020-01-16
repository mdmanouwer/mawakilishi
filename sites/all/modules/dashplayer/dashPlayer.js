var dashReady=false;var dashObjects=new Array();var dashCallback=function(args){};var dashId="dashplayer";var activePlaylist="";var activePlayer="";$(document).ready(function(){dashReady=true});function isDashReady(){return dashReady};function dashDebug(arg){$('#dashdebug').append(arg+"<br/>")};function getDashObject(dashId){var dashObj=null;if(dashObjects[dashId]){if(dashObjects[dashId].object){dashObj=dashObjects[dashId].object}}if(!dashObj){if(dashReady){if(navigator.appName.indexOf("Microsoft")!=-1){dashObj=window[dashId]}else{if(document[dashId].length!==undefined){dashObj=document[dashId][1]}else{dashObj=document[dashId]}}if(dashObjects[dashId]){dashObjects[dashId].object=dashObj}}}return dashObj};function dashAddObject(dashId){dashObjects[dashId]={id:dashId,ready:false,object:null}};function isDashRegistered(){var registered=true;if(dashObjects){for(var dashId in dashObjects){if(dashObjects.hasOwnProperty(dashId)){registered&=dashObjects[dashId].ready}}}return registered};function dashInitialize(dashId){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.initialize()}catch(error){dashDebug(error)}}};function startDash(){if(isDashRegistered()){for(var dashId in dashObjects){if(dashObjects.hasOwnProperty(dashId)){dashInitialize(dashId)}}}};function dashRegisterObject(dashId){if(!dashObjects.hasOwnProperty(dashId)){dashAddObject(dashId)}dashObjects[dashId].ready=true;startDash()};function dashSpawn(dashId){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.spawn()}catch(error){dashDebug(error)}return true}return false};function dashSetActivePlaylist(id){activePlaylist=id};function dashSetActivePlayer(id){activePlayer=id};function dashSpawnWindow(playerPath){try{window.open(playerPath)}catch(error){dashDebug(error)}};function dashLoadNode(dashId,nodeId){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.loadNode(nodeId)}catch(error){dashDebug(error)}return true}return false};function dashLoad(dashId,file){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.loadMedia(file)}catch(error){dashDebug(error)}return true}return false};function dashPlay(dashId,file){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.playMedia(file)}catch(error){dashDebug(error)}return true}return false};function dashPause(dashId){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.pauseMedia()}catch(error){dashDebug(error)}return true}return false};function dashStop(dashId){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.stopMedia()}catch(error){dashDebug(error)}return true}return false};function dashSeek(dashId,seekTime){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setSeek(seekTime)}catch(error){dashDebug(error)}return true}return false};function dashVolume(dashId,vol){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setVolume(vol)}catch(error){dashDebug(error)}return true}return false};function dashGetVolume(dashId){var dashObj=getDashObject(dashId);if(dashObj){try{return dashObj.getVolume()}catch(error){dashDebug(error)}}return 0};function dashSetFullScreen(dashId,full){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setFullScreen(full)}catch(error){dashDebug(error)}return true}return false};function dashSetMaximize(dashId,max,tween){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setMaximize(max,tween)}catch(error){dashDebug(error)}return true}return false};function dashSetMenu(dashId,menu,tween){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setMenu(menu,tween)}catch(error){dashDebug(error)}return true}return false};function dashIsNodeLoaded(dashId){var dashObj=getDashObject(dashId);if(dashObj){return(dashObj.isNodeLoaded())}return false};function dashLoadPlaylist(dashId,playlist){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.loadPlaylist(playlist)}catch(error){dashDebug(error)}return true}return false};function dashLoadPrev(dashId,loop,playAfter){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.loadPrev(loop,playAfter)}catch(error){dashDebug(error)}return true}return false};function dashLoadNext(dashId,loop,playAfter){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.loadNext(loop,playAfter)}catch(error){dashDebug(error)}return true}return false};function dashPrevPage(dashId,loop){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.prevPage(loop)}catch(error){dashDebug(error)}return true}return false};function dashNextPage(dashId,loop){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.nextPage(loop)}catch(error){dashDebug(error)}return true}return false};function dashSetFilter(dashId,argument,index){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setFilter(argument,index)}catch(error){dashDebug(error)}return true}return false};function dashSetPlaylist(dashId,message){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setPlaylist(message)}catch(error){dashDebug(error)}return true}return false};function dashSetPlaylistVote(dashId,nodeId,vote){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setPlaylistVote(nodeId,vote)}catch(error){dashDebug(error)}return true}return false};function dashSetPlaylistUserVote(dashId,nodeId,vote){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setPlaylistUserVote(nodeId,vote)}catch(error){dashDebug(error)}return true}return false};function dashSetVote(dashId,vote){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setVote(vote)}catch(error){dashDebug(error)}return true}return false};function dashSetUserVote(dashId,vote){var dashObj=getDashObject(dashId);if(dashObj){try{dashObj.setUserVote(vote)}catch(error){dashDebug(error)}return true}return false};function dashResetControls(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.resetControls();return true}return false};function dashEnableControls(dashId,enable){var dashObj=getDashObject(dashId);if(dashObj){dashObj.enableControls(enable);return true}return false};function dashSetControlState(dashId,state){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setControlState(state);return true}return false};function dashSetControlTime(dashId,time){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setControlTime(time);return true}return false};function dashSetControlVolume(dashId,volume){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setControlVolume(volume);return true}return false};function dashSetControlProgress(dashId,progress){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setControlProgress(progress);return true}return false};function dashSetControlSeek(dashId,seek){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setControlSeek(seek);return true}return false};function dashControlUpdate(dashId,playTime,totalTime){var dashObj=getDashObject(dashId);if(dashObj){dashObj.controlUpdate(playTime,totalTime);return true}return false};function dashSetSkin(dashId,skin){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setSkin(skin);return true}return false};function dashServiceCall(){var dashId=arguments[0];arguments.shift();var command=arguments[0];arguments.shift();dashCallback=arguments[0];arguments.shift();var dashObj=getDashObject(dashId);if(dashObj){dashObj.serviceCall(command,arguments);return true}return false};function dashServiceReturn(args){dashCallback(args)};function onYouTubePlayerReady(playerId){dashId=playerId;var dashObj=getDashObject(playerId);if(dashObj){try{dashObj.addEventListener("onStateChange","youTubeOnStateChange");dashObj.addEventListener("onError","youTubeOnError");dashObj.onYouTubeReady()}catch(error){dashDebug(error)}}};function youTubeOnStateChange(newState){var dashObj=getDashObject(dashId);if(dashObj){dashObj.onYouTubeStateChange(newState)}};function youTubeOnError(error){var dashObj=getDashObject(dashId);if(dashObj){dashObj.onYouTubeError(error)}};function youTubeLoad(dashId,youTubeId,startSeconds){var dashObj=getDashObject(dashId);if(dashObj){dashObj.loadVideoById(youTubeId,startSeconds)}};function youTubeCue(dashId,youTubeId,startSeconds){var dashObj=getDashObject(dashId);if(dashObj){dashObj.cueVideoById(youTubeId,startSeconds)}};function youTubeDestroy(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.destroy()}};function youTubeClear(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.clearVideo()}};function youTubeSetSize(dashId,_width,_height){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setSize(_width,_height)}};function youTubePlay(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.playVideo()}};function youTubePause(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.pauseVideo()}};function youTubeStop(dashId){var dashObj=getDashObject(dashId);if(dashObj){dashObj.stopVideo()}};function youTubeSeek(dashId,seconds,allowSeekAhead){var dashObj=getDashObject(dashId);if(dashObj){dashObj.seekTo(seconds,allowSeekAhead)}};function youTubeGetBytesLoaded(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getVideoBytesLoaded()}return 0};function youTubeGetBytesTotal(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getVideoBytesTotal()}return 0};function youTubeGetCurrentTime(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getCurrentTime()}return 0};function youTubeGetDuration(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getDuration()}return 0};function youTubeSetVolume(dashId,newVolume){var dashObj=getDashObject(dashId);if(dashObj){dashObj.setVolume(newVolume)}};function youTubeGetVolume(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getVolume()}return 0};function youTubeGetEmbedCode(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getEmbedCode()}return""};function youTubeGetVideoUrl(dashId){var dashObj=getDashObject(dashId);if(dashObj){return dashObj.getVideoUrl()}return""};