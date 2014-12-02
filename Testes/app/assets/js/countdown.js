function Countdown()
{
	this.seconds = 5;
	this.devxiii = new DevXIII();

	this._init = function()
	{
		if( this.seconds === 0  )
		{
			this.stopCountdown();
		}
		this.devxiii.getId('count').innerHTML = this.seconds;
		this.seconds = this.seconds-1;
	}

	
	this.stopCountdown = function()
	{
		clearInterval(theInterval);
		window.location.href = '?page=index';
	}

}
