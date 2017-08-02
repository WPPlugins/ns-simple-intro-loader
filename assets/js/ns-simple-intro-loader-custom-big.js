jQuery(document).ready(function($) {
	$("#nsSimLoader").introLoader({
	    animation: {
	        name: 'simpleLoader',
	        options: {
	            exitFx:'fadeOut',
	            ease: "linear",
	            style: 'light',
	            delayBefore: 500, //delay time in milliseconds
	            exitTime: 300
	        }
	    },    

	    spinJs: {}
	    
	});   
});