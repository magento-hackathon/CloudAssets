CloudAssets
===========

## Motivation

If you cluster your Magento-Store you normally use a in-memory NFS-Share for common used data and dynamically generated files like media, cache, sessions, sitemaps...
In the past there were some problems with stable connections to NFS, kernel-updates (e.g. in Ubuntu 12.04), latency. And of course you have a single-point of failure if there is no redundancy provided.

Our main goal was to avoid these mentioned problems within Magento. Our ideas were the following:

## Possible Solutions
* Using the existing IO-Wrapper to provide different storages for former files.
* Pre-populate the cached assets and assume everything is on the new shared storage facility
* Files that bypass the IO-Wrapper during write could be synced with external tools
* Using database instead of filesystem to store and share at least the media data

## Drawbacks
* Usage of IO-Wrapper is not wide spreaded
* Maybe creating 404-errors due to missed files/cache entries during warmup
* By minimizing sync delay io is greatly increased
* The functionality is not yet "production ready" but only partially working. Having so huge amount of data and maybe io on the database cluster can cause problems on the database nodes and lead to necissity of clustering the database node itself

## Conclusion

Right now there is no really usable "magento way" of removing NFS from the cluster setup. It could be achieved by heavy syncing and "clever" system setup.
The normally used NFS setup seems to be the way to choose right now because no other possibility comes without great flaws as well.

If done correctly NFS can circumvent most of the previously mentioned problems.
* usage of ramdisk for fast storage
* redundant storage nodes
* management and beeing aware of problems during system updates 
* having a 1:1 replication of the cluster to test updates and maybe for fallback
