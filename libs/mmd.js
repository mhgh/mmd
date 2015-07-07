/* MathMirrorDown | https://github.com/mhgh/mmd | (c) 2015 Mohammad Hossein Ghaffari | MIT License */

$(document).ready(function() {  
        
        $(".CodeMirror-wrap textarea").keyup(function() {
 		Preview.Update(this);
	});          

});



var Preview = {
  delay: 300,       

  preview: null,    
  textr: null,      

  timeout: null,    
  mjRunning: false,     

//   Init: function () {
//       ;
//   },

  Update: function (el) {
    this.txtr = el;
    $(el.currentTarget).parents(".uk-htmleditor").find('.uk-htmleditor-preview').children().eq(0);
    if (this.timeout) {clearTimeout(this.timeout)}
    this.timeout = setTimeout(this.callback,this.delay);
  },

  CreatePreview: function () {
    Preview.timeout = null;
    if (this.mjRunning) return;
    var text = this.txtr.value;
    
    this.mjRunning = true;
    
    MathJax.Hub.Queue(
      ["Typeset",MathJax.Hub,text],
      ["PreviewDone",this]
    );    
    
  },

  PreviewDone: function () {
    this.mjRunning = false;
  }

};


Preview.callback = MathJax.Callback(["CreatePreview",Preview]);
Preview.callback.autoReset = true; 


