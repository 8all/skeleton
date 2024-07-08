The `Data_Cache` is Skeleton's class for caching data which may be computationally expensive to regenerate, such as the result of complex datatabase queries. This object cache is defined in `skeleton/third_party/bkader/class-cache-object.php`.  

Do not use the class directly in your code when developing your application, but use the `data_cache_x` functions listed below.

By default, the object cache is non-persistent. This means that data stored in the cache resides in memory only and only for the duration of the request. Cached data will not be stored persistently across page loads.

## Data_Cache functions
Most of these function take a:

* `$ey`: the key to indicate the value.
* `$data`: the value to want to store.
* `$group` _(optional)_: This is a way of grouping data within the cache. Allows you to use the same key accross different groups.

#### `data_cache_add`

```php
data_cache_add($key, $data, $group);
```

This function adds data to the cache if the cache key doesn't already exist. If it does exist, the data is not added and the function returns `false`.

#### `data_cache_add_groups`

```php
data_cache_add_groups($groups);
// 'group1, group2...' OR array('group1', 'group2')
```

Sets the list of global cache groups.

#### `data_cache_set`

```php
data_cache_set($key, $data, $group);
```

Adds data to the cache. If the cache key already exists, then it will be overwritten; if not then it will be created.

#### `data_cache_get`

```php
data_cache_get($key, $group);
```

Returns the value of the cached object, or `false` if the cache key doesn't exist.

To disambiguate a cached false from a non-existing key, you should do absolute testing of `$found`, which is passed by reference, against false: if `$found === false`, the key does not exist.

#### `data_cache_replace`

```php
data_cache_replace($key, $data, $group);
```

Replaces the contents in the cache, if contents already exist.

#### `data_cache_delete`

```php
data_cache_delete($key, $group);
```

Removes the contents of the cache key in the group if it exists.

#### `data_cache_reset`

```php
data_cache_replace($key, $data, $group);
```

Resets all cache keys.

#### `data_cache_flush`

```php
data_cache_replace($key, $data, $group);
```

Clears the object cache of all data.