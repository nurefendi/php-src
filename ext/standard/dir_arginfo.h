/* This is a generated file, edit the .stub.php file instead.
 * Stub hash: 2670287ef059725cceda0a8f9ac6515cdcedb521 */

ZEND_BEGIN_ARG_INFO_EX(arginfo_class_Directory_close, 0, 0, 0)
	ZEND_ARG_INFO_WITH_DEFAULT_VALUE(0, dir_handle, "null")
ZEND_END_ARG_INFO()

#define arginfo_class_Directory_rewind arginfo_class_Directory_close

#define arginfo_class_Directory_read arginfo_class_Directory_close


ZEND_FUNCTION(closedir);
ZEND_FUNCTION(rewinddir);
ZEND_FUNCTION(readdir);


static const zend_function_entry class_Directory_methods[] = {
	ZEND_ME_MAPPING(close, closedir, arginfo_class_Directory_close, ZEND_ACC_PUBLIC)
	ZEND_ME_MAPPING(rewind, rewinddir, arginfo_class_Directory_rewind, ZEND_ACC_PUBLIC)
	ZEND_ME_MAPPING(read, readdir, arginfo_class_Directory_read, ZEND_ACC_PUBLIC)
	ZEND_FE_END
};
