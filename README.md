CloudAssets
===========

If you cluster your Magento-Store you normally use a in-memory NFS-Share for common used data and dynamically generated files like media, cache, sessions, sitemaps...
In the past there were some problems with stable connections to NFS, kernel-updates (e.g. in Ubuntu 12.04), latency. And of course you have a single-point of failure if there is no redundancy provided.

Our main goal was to avoid these mentioned problems within Magento. Our ideas were the following:

