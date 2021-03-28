<?php
/*
*                 eyeos - The Open Source Cloud's Web Desktop
*                               Version 2.0
*                   Copyright (C) 2007 - 2010 eyeos Team 
* 
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation.
* 
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
* 
* You should have received a copy of the GNU Affero General Public License
* version 3 along with this program in the file "LICENSE".  If not, see 
* <http://www.gnu.org/licenses/agpl-3.0.txt>.
* 
* See www.eyeos.org for more details. All requests should be sent to licensing@eyeos.org
* 
* The interactive user interfaces in modified source and object code versions
* of this program must display Appropriate Legal Notices, as required under
* Section 5 of the GNU Affero General Public License version 3.
* 
* In accordance with Section 7(b) of the GNU Affero General Public License version 3,
* these Appropriate Legal Notices must retain the display of the "Powered by
* eyeos" logo and retain the original copyright notice. If the display of the 
* logo is not reasonably feasible for technical reasons, the Appropriate Legal Notices
* must display the words "Powered by eyeos" and retain the original copyright notice. 
*/

/**
 * Exception thrown for errors that are only detectable at runtime.
 */
class EyeRuntimeException extends EyeException {}

	/**
	 * Exception thrown to indicate a missing class definition.
	 */
	class EyeClassNotFoundException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate an invalid class type.
	 */
	class EyeInvalidClassException extends EyeRuntimeException {}

	/**
	 * Exception thrown to indicate a missing handler.
	 */
	class EyeHandlerNotFoundException extends EyeRuntimeException {}

	/**
	 * Exception thrown to indicate a missing argument.
	 */
	class EyeMissingArgumentException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate an unexpected null value.
	 */
	class EyeNullPointerException extends EyeRuntimeException {}

	/**
	 * Exception thrown when an illegal index was requested.
	 */
	class EyeOutOfBoundsException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate arithmetic/buffer overflow.
	 */
	class EyeOverflowException extends EyeRuntimeException {}

	/**
	 * Exception thrown to indicate range errors during program execution.
	 */
	class EyeRangeException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate a session expiration.
	 */
	class EyeSessionExpiredException extends EyeRuntimeException {}

	/**
	 * Exception thrown to indicate arithmetic/buffer underflow.
	 */
	class EyeUnderflowException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate an unsupported operation.
	 */
	class EyeUnsupportedOperationException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate an unexpected value.
	 */
	class EyeUnexpectedValueException extends EyeRuntimeException {}
	
	/**
	 * Exception thrown to indicate an unknown error.
	 */
	class EyeUnknownErrorException extends EyeRuntimeException {}

?>
