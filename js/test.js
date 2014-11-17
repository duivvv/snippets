function (error, data){
	if(error){
		console.log(error.message);
	}
	if(data){
		if(data.length === 0){
			return cb(new Error("there is no data"));
		}
	}
}