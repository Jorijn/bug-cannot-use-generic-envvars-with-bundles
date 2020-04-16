# This is a repository to demonstrate a possible bug in Symfony. 
If the developer uses a generic environment variable to configure two or more different bundles, the placeholder / valilogic breaks. Steps to reproduce:

## Steps to reproduce
1. Install this repository. I created two internal bundles to simulate external dependencies. 
2. See `config/test_cache.yaml` and `config/test_queue.yaml`. Both configure their respective bundle with a (example) TTL value of type integer. They both reference the same generic environment variable: `GENERIC_TTL_VALUE` of value `"100"`.
3. The Symfony internals will provide a type matched (integer) placeholder to feed into the validation of the application configuration.
_Unproven suspicions hereafter_
4. After the first bundle is handled in `MergeExtensionConfigurationPass` it presumably clears the env var placeholder list in `BaseNode::$placeholders`
5. The second bundle is unable to fetch the integer placeholder and stays on the default value of `env_b47212d4eceb452c_int_GENERIC_TTL_VALUE_9c6a30a1aa87aefcade48d2c6bf6edb0` which is not an integer, this results in the validation failure.     
