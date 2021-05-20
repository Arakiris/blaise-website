	function ChangeQuestionDatabase(val)
	{
		var id = document.mainform.question_database_id.value;
		if (id != "")
		{
			document.mainform.action.value = val;
			document.mainform.submit();
		}
		return false;
	}//function ChangeQuestionDatabase(val)

	function ChangeQuestionCollection(val)
	{
		var id = document.mainform.question_collection_id.value;
		if (id != "")
		{
			document.mainform.action.value = val;
			document.mainform.submit();
		}
		return false;
	}//function ChangeQuestionCollection(val)
	
	function ChangeTopicCollection(val)
	{
		var id = document.mainform.topic_collection_id.value;
		if (id != "")
		{
			document.mainform.action.value = val;
			document.mainform.submit();
		}
		return false;
	}//function ChangeQuestionCollection(val)
	
	function ChangeExam(val)
	{
		var id = document.mainform.exam_id.value;
		if (id != "")
		{
			document.mainform.action.value = val;
			document.mainform.submit();
		}
		return false;
	}//function ChangeQuestionCollection(val)
	
	function Ascending(a, b)
	{ 
		return (a-b); 
	}
	