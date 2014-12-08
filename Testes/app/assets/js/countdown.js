function Countdown()
{
	this.seconds = 5;
	this.baseurl = '';
	this.devxiii = new DevXIII();

	this._init = function()
	{
		if( this.seconds === 0  )
		{
			this.stopCountdown();
		}
		this.devxiii.getId('count').innerHTML = '<span>'+this.seconds+'</span>';
		this.seconds = this.seconds-1;
	}
	this.setBaseurl = function( baseurl )
	{
		this.baseurl = baseurl;
	}

	this.stopCountdown = function()
	{
		clearInterval(theInterval);
		window.location.href = this.baseurl+'index';
	}

}
