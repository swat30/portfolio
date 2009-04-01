/** portfolio js **/
function site(e, id){
	$('column1').fade({duration: 0.5, to: 0.001});
	$('portfolioImage').setStyle({
		backgroundImage: ''
	});
	
	setTimeout(function (){
		$('column1').update("<h2>Loading...</h2>");
		$('column1').appear({duration: 0.5});
	}, 500);
	
	setTimeout("changeDesc("+id+")", 2000);
	setTimeout("changePic("+id+")", 2000);
}

function changePic(id){
	new Ajax.Updater("portfolioHolder", '/', {
		method: 'post',
		parameters: {
			section: 'portfolio',
			id: id,
			element: 'column2',
			ajax: true
		},
		onSuccess: function(transport) {
			setTimeOut(function(){
				$('portfolioHolder').appear({duration: 0.5});
			}, 1000);
		}
	});	
}

function changeDesc(id){
	new Ajax.Request('/', {
		method: 'post',
		parameters: {
			section: 'portfolio',
			id: id,
			element: 'column1',
			ajax: true
		},
		onSuccess: function(transport) {
			$('column1').fade({duration: 0.5, to: 0.001});
			setTimeout(function(){
				$('column1').update(transport.responseText);
				$('column1').appear();
			}, 500);
		}
	});	
}

/** thumbHolder js **/
function thumbUpdate(inc){
	thumbsOut();
	setTimeout('thumbData('+inc+')', 500);
	setTimeout('thumbsIn()', 1000);
}

function thumbData(inc){
	new Ajax.Updater("thumbHolder", '/', {
		method: 'post',
		parameters: {
			section: 'portfolio',
			increment: inc,
			element: 'thumbHolder',
			ajax: true
		},
		onSuccess: function (transport) {
			$('thumbHolder').update(transport.responseText);
		}
	});
	return false;
}

function thumbsOut(){
	var thumbs = $$('div.thumb');
	for(var i = 0; i < 3; i++){
		thumbs[i].fade({duration: 0.5});
	}
}

function thumbsIn(){
	var thumbs = $$('div.thumb');
	for(var i = 0; i < 3; i++){
		thumbs[i].appear({duration: 0.5});
	}
}
